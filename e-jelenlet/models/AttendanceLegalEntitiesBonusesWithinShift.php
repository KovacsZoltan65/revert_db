<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesBonusesWithinShift
 * 
 * @property int $id
 * @property int $registered_calendar_id
 * @property int $payroll_calendar_id
 * @property int $attendance_legal_entities_shifts_id
 * @property int $attendance_bonus_types_id
 * @property int $creator_legal_entity_id
 * @property Carbon $start_time
 * @property Carbon $end_time
 * 
 * @property AttendanceLegalEntitiesCalendar $attendance_legal_entities_calendar
 * @property AttendanceLegalEntitiesShift $attendance_legal_entities_shift
 * @property AttendanceBonusType $attendance_bonus_type
 * @property CoreLegalEntity $core_legal_entity
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesBonusesWithinShift extends Model
{
	protected $table = 'attendance_legal_entities_bonuses_within_shift';
	public $timestamps = false;

	protected $casts = [
		'registered_calendar_id' => 'int',
		'payroll_calendar_id' => 'int',
		'attendance_legal_entities_shifts_id' => 'int',
		'attendance_bonus_types_id' => 'int',
		'creator_legal_entity_id' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime'
	];

	protected $fillable = [
		'registered_calendar_id',
		'payroll_calendar_id',
		'attendance_legal_entities_shifts_id',
		'attendance_bonus_types_id',
		'creator_legal_entity_id',
		'start_time',
		'end_time'
	];

	public function attendance_legal_entities_calendar()
	{
		return $this->belongsTo(AttendanceLegalEntitiesCalendar::class, 'payroll_calendar_id');
	}

	public function attendance_legal_entities_shift()
	{
		return $this->belongsTo(AttendanceLegalEntitiesShift::class, 'attendance_legal_entities_shifts_id');
	}

	public function attendance_bonus_type()
	{
		return $this->belongsTo(AttendanceBonusType::class, 'attendance_bonus_types_id');
	}

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'creator_legal_entity_id');
	}
}
