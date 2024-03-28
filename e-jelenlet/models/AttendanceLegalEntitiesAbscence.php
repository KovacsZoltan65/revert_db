<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesAbscence
 * 
 * @property int $id
 * @property int|null $registered_calendar_id
 * @property int|null $payroll_calendar_id
 * @property int|null $attendance_legal_entities_shifts_id
 * @property int|null $attendance_abscence_types_id
 * @property int|null $attendance_offday_types_id
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property string|null $note_legal_entity
 * @property string|null $note_boss
 * @property int|null $creator_legal_entity_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property AttendanceLegalEntitiesCalendar|null $attendance_legal_entities_calendar
 * @property AttendanceLegalEntitiesShift|null $attendance_legal_entities_shift
 * @property AttendanceAbscenceType|null $attendance_abscence_type
 * @property AttendanceOffdayType|null $attendance_offday_type
 * @property CoreLegalEntity|null $core_legal_entity
 * @property Collection|AttendanceWorkdayDivision[] $attendance_workday_divisions
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesAbscence extends Model
{
	protected $table = 'attendance_legal_entities_abscences';

	protected $casts = [
		'registered_calendar_id' => 'int',
		'payroll_calendar_id' => 'int',
		'attendance_legal_entities_shifts_id' => 'int',
		'attendance_abscence_types_id' => 'int',
		'attendance_offday_types_id' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'creator_legal_entity_id' => 'int'
	];

	protected $fillable = [
		'registered_calendar_id',
		'payroll_calendar_id',
		'attendance_legal_entities_shifts_id',
		'attendance_abscence_types_id',
		'attendance_offday_types_id',
		'start_time',
		'end_time',
		'note_legal_entity',
		'note_boss',
		'creator_legal_entity_id'
	];

	public function attendance_legal_entities_calendar()
	{
		return $this->belongsTo(AttendanceLegalEntitiesCalendar::class, 'payroll_calendar_id');
	}

	public function attendance_legal_entities_shift()
	{
		return $this->belongsTo(AttendanceLegalEntitiesShift::class, 'attendance_legal_entities_shifts_id');
	}

	public function attendance_abscence_type()
	{
		return $this->belongsTo(AttendanceAbscenceType::class, 'attendance_abscence_types_id');
	}

	public function attendance_offday_type()
	{
		return $this->belongsTo(AttendanceOffdayType::class, 'attendance_offday_types_id');
	}

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'creator_legal_entity_id');
	}

	public function attendance_workday_divisions()
	{
		return $this->hasMany(AttendanceWorkdayDivision::class, 'attendance_legal_entities_abscences_id');
	}
}
