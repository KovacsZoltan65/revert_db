<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceWorkplansAdditionalBonus
 * 
 * @property int $id
 * @property int $attendance_workplans_id
 * @property int $attendance_bonus_types_id
 * @property int $type
 * 
 * @property AttendanceWorkplan $attendance_workplan
 * @property AttendanceBonusType $attendance_bonus_type
 *
 * @package App\Models
 */
class AttendanceWorkplansAdditionalBonus extends Model
{
	protected $table = 'attendance_workplans_additional_bonuses';
	public $timestamps = false;

	protected $casts = [
		'attendance_workplans_id' => 'int',
		'attendance_bonus_types_id' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'attendance_workplans_id',
		'attendance_bonus_types_id',
		'type'
	];

	public function attendance_workplan()
	{
		return $this->belongsTo(AttendanceWorkplan::class, 'attendance_workplans_id');
	}

	public function attendance_bonus_type()
	{
		return $this->belongsTo(AttendanceBonusType::class, 'attendance_bonus_types_id');
	}
}
