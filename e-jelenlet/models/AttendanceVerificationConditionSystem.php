<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceVerificationConditionSystem
 * 
 * @property int $id
 * @property string $name
 * @property int $core_firms_id
 * 
 * @property CoreFirm $core_firm
 * @property Collection|AttendanceVerificationConditionValue[] $attendance_verification_condition_values
 * @property Collection|AttendanceWorkplan[] $attendance_workplans
 *
 * @package App\Models
 */
class AttendanceVerificationConditionSystem extends Model
{
	protected $table = 'attendance_verification_condition_systems';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int'
	];

	protected $fillable = [
		'name',
		'core_firms_id'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function attendance_verification_condition_values()
	{
		return $this->hasMany(AttendanceVerificationConditionValue::class);
	}

	public function attendance_workplans()
	{
		return $this->hasMany(AttendanceWorkplan::class, 'attendance_verification_condition_systems_id');
	}
}
