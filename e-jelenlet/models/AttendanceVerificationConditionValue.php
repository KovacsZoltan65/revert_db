<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceVerificationConditionValue
 * 
 * @property int $id
 * @property int $attendance_verification_condition_system_id
 * @property int $attendance_verification_condition_id
 * @property string $value
 * 
 * @property AttendanceVerificationConditionSystem $attendance_verification_condition_system
 * @property AttendanceVerificationCondition $attendance_verification_condition
 *
 * @package App\Models
 */
class AttendanceVerificationConditionValue extends Model
{
	protected $table = 'attendance_verification_condition_values';
	public $timestamps = false;

	protected $casts = [
		'attendance_verification_condition_system_id' => 'int',
		'attendance_verification_condition_id' => 'int'
	];

	protected $fillable = [
		'attendance_verification_condition_system_id',
		'attendance_verification_condition_id',
		'value'
	];

	public function attendance_verification_condition_system()
	{
		return $this->belongsTo(AttendanceVerificationConditionSystem::class);
	}

	public function attendance_verification_condition()
	{
		return $this->belongsTo(AttendanceVerificationCondition::class);
	}
}
