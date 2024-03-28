<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesOvertime
 * 
 * @property int $id
 * @property int|null $registered_calendar_id
 * @property int|null $payroll_calendar_id
 * @property int|null $attendance_legal_entities_shifts_id
 * @property int|null $creator_legal_entity_id
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property int $overtime_minutes
 * @property int $shifted_minutes
 * @property Carbon|null $export_date
 * @property string|null $note_legal_entity
 * @property string|null $note_boss
 * 
 * @property AttendanceLegalEntitiesCalendar|null $attendance_legal_entities_calendar
 * @property AttendanceLegalEntitiesShift|null $attendance_legal_entities_shift
 * @property CoreLegalEntity|null $core_legal_entity
 * @property Collection|AttendanceLegalEntitiesOvertimesBonusesRel[] $attendance_legal_entities_overtimes_bonuses_rels
 * @property Collection|AttendanceWorkdayDivision[] $attendance_workday_divisions
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesOvertime extends Model
{
	protected $table = 'attendance_legal_entities_overtimes';
	public $timestamps = false;

	protected $casts = [
		'registered_calendar_id' => 'int',
		'payroll_calendar_id' => 'int',
		'attendance_legal_entities_shifts_id' => 'int',
		'creator_legal_entity_id' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'overtime_minutes' => 'int',
		'shifted_minutes' => 'int',
		'export_date' => 'datetime'
	];

	protected $fillable = [
		'registered_calendar_id',
		'payroll_calendar_id',
		'attendance_legal_entities_shifts_id',
		'creator_legal_entity_id',
		'start_time',
		'end_time',
		'overtime_minutes',
		'shifted_minutes',
		'export_date',
		'note_legal_entity',
		'note_boss'
	];

	public function attendance_legal_entities_calendar()
	{
		return $this->belongsTo(AttendanceLegalEntitiesCalendar::class, 'payroll_calendar_id');
	}

	public function attendance_legal_entities_shift()
	{
		return $this->belongsTo(AttendanceLegalEntitiesShift::class, 'attendance_legal_entities_shifts_id');
	}

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'creator_legal_entity_id');
	}

	public function attendance_legal_entities_overtimes_bonuses_rels()
	{
		return $this->hasMany(AttendanceLegalEntitiesOvertimesBonusesRel::class, 'attendance_legal_entities_overtimes_id');
	}

	public function attendance_workday_divisions()
	{
		return $this->hasMany(AttendanceWorkdayDivision::class, 'attendance_legal_entities_overtimes_id');
	}
}
