<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesOutsideShiftsTimeBonusesRel
 * 
 * @property int $id
 * @property int|null $attendance_legal_entities_outside_shifts_time_id
 * @property int|null $attendance_bonus_types_id
 * 
 * @property AttendanceLegalEntitiesOutsideShiftsTime|null $attendance_legal_entities_outside_shifts_time
 * @property AttendanceBonusType|null $attendance_bonus_type
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesOutsideShiftsTimeBonusesRel extends Model
{
	protected $table = 'attendance_legal_entities_outside_shifts_time_bonuses_rel';
	public $timestamps = false;

	protected $casts = [
		'attendance_legal_entities_outside_shifts_time_id' => 'int',
		'attendance_bonus_types_id' => 'int'
	];

	protected $fillable = [
		'attendance_legal_entities_outside_shifts_time_id',
		'attendance_bonus_types_id'
	];

	public function attendance_legal_entities_outside_shifts_time()
	{
		return $this->belongsTo(AttendanceLegalEntitiesOutsideShiftsTime::class);
	}

	public function attendance_bonus_type()
	{
		return $this->belongsTo(AttendanceBonusType::class, 'attendance_bonus_types_id');
	}
}
