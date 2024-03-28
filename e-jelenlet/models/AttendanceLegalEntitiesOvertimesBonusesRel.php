<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesOvertimesBonusesRel
 * 
 * @property int $id
 * @property int|null $attendance_legal_entities_overtimes_id
 * @property int|null $attendance_bonus_types_id
 * 
 * @property AttendanceLegalEntitiesOvertime|null $attendance_legal_entities_overtime
 * @property AttendanceBonusType|null $attendance_bonus_type
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesOvertimesBonusesRel extends Model
{
	protected $table = 'attendance_legal_entities_overtimes_bonuses_rel';
	public $timestamps = false;

	protected $casts = [
		'attendance_legal_entities_overtimes_id' => 'int',
		'attendance_bonus_types_id' => 'int'
	];

	protected $fillable = [
		'attendance_legal_entities_overtimes_id',
		'attendance_bonus_types_id'
	];

	public function attendance_legal_entities_overtime()
	{
		return $this->belongsTo(AttendanceLegalEntitiesOvertime::class, 'attendance_legal_entities_overtimes_id');
	}

	public function attendance_bonus_type()
	{
		return $this->belongsTo(AttendanceBonusType::class, 'attendance_bonus_types_id');
	}
}
