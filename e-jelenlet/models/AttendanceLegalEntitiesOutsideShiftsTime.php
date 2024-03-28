<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesOutsideShiftsTime
 * 
 * @property int $id
 * @property int $type
 * @property int|null $attendance_legal_entities_calendar_id
 * @property int|null $attendance_standby_types_id
 * @property int|null $creator_legal_entity_id
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property string $note_legal_entity
 * @property string $note_boss
 * 
 * @property AttendanceLegalEntitiesCalendar|null $attendance_legal_entities_calendar
 * @property CoreLegalEntity|null $core_legal_entity
 * @property AttendanceStandbyType|null $attendance_standby_type
 * @property Collection|AttendanceLegalEntitiesOutsideShiftsTimeBonusesRel[] $attendance_legal_entities_outside_shifts_time_bonuses_rels
 * @property Collection|AttendanceStandbyOvertime[] $attendance_standby_overtimes
 * @property Collection|AttendanceWorkdayDivision[] $attendance_workday_divisions
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesOutsideShiftsTime extends Model
{
	protected $table = 'attendance_legal_entities_outside_shifts_time';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'attendance_legal_entities_calendar_id' => 'int',
		'attendance_standby_types_id' => 'int',
		'creator_legal_entity_id' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime'
	];

	protected $fillable = [
		'type',
		'attendance_legal_entities_calendar_id',
		'attendance_standby_types_id',
		'creator_legal_entity_id',
		'start_time',
		'end_time',
		'note_legal_entity',
		'note_boss'
	];

	public function attendance_legal_entities_calendar()
	{
		return $this->belongsTo(AttendanceLegalEntitiesCalendar::class);
	}

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'creator_legal_entity_id');
	}

	public function attendance_standby_type()
	{
		return $this->belongsTo(AttendanceStandbyType::class, 'attendance_standby_types_id');
	}

	public function attendance_legal_entities_outside_shifts_time_bonuses_rels()
	{
		return $this->hasMany(AttendanceLegalEntitiesOutsideShiftsTimeBonusesRel::class);
	}

	public function attendance_standby_overtimes()
	{
		return $this->hasMany(AttendanceStandbyOvertime::class);
	}

	public function attendance_workday_divisions()
	{
		return $this->hasMany(AttendanceWorkdayDivision::class);
	}
}
