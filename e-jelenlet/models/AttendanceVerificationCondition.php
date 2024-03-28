<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceVerificationCondition
 * 
 * @property int $id
 * @property int|null $core_firms_id
 * @property int|null $workplan_category
 * @property string $type
 * @property string $operator
 * @property string $unit
 * @property string $period
 * @property string $value
 * @property int $base_rule
 * @property int|null $prev_version_id
 * @property Carbon|null $validity_start
 * @property Carbon|null $validity_end
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|AttendanceVerificationConditionValue[] $attendance_verification_condition_values
 * @property Collection|AttendanceVerificationConditionsDetail[] $attendance_verification_conditions_details
 *
 * @package App\Models
 */
class AttendanceVerificationCondition extends Model
{
	protected $table = 'attendance_verification_conditions';

	protected $casts = [
		'core_firms_id' => 'int',
		'workplan_category' => 'int',
		'base_rule' => 'int',
		'prev_version_id' => 'int',
		'validity_start' => 'datetime',
		'validity_end' => 'datetime'
	];

	protected $fillable = [
		'core_firms_id',
		'workplan_category',
		'type',
		'operator',
		'unit',
		'period',
		'value',
		'base_rule',
		'prev_version_id',
		'validity_start',
		'validity_end'
	];

	public function attendance_verification_condition_values()
	{
		return $this->hasMany(AttendanceVerificationConditionValue::class);
	}

	public function attendance_verification_conditions_details()
	{
		return $this->hasMany(AttendanceVerificationConditionsDetail::class, 'attendance_verification_conditions_id');
	}
}
