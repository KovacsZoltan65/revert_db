<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceAccessControlSystemsRule
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $name
 * @property int|null $arrive_tolerance_time_minus
 * @property int|null $arrive_tolerance_time_plus
 * @property bool $arrive_tolerance_time_out_boss_rejection
 * @property bool $arrive_tolerance_times_active
 * @property int $arrive_rounding
 * @property int $arrive_double_data
 * @property int|null $leave_tolerance_time_minus
 * @property int|null $leave_tolerance_time_plus
 * @property bool $leave_tolerance_time_out_boss_rejection
 * @property bool $leave_tolerance_times_active
 * @property int $leave_rounding
 * @property int $leave_double_data
 * @property int|null $over_work_handle
 * @property bool $fault_sign
 * @property int $double_checking_time
 * 
 * @property CoreFirm $core_firm
 * @property Collection|AttendanceWorkplan[] $attendance_workplans
 *
 * @package App\Models
 */
class AttendanceAccessControlSystemsRule extends Model
{
	protected $table = 'attendance_access_control_systems_rules';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'arrive_tolerance_time_minus' => 'int',
		'arrive_tolerance_time_plus' => 'int',
		'arrive_tolerance_time_out_boss_rejection' => 'bool',
		'arrive_tolerance_times_active' => 'bool',
		'arrive_rounding' => 'int',
		'arrive_double_data' => 'int',
		'leave_tolerance_time_minus' => 'int',
		'leave_tolerance_time_plus' => 'int',
		'leave_tolerance_time_out_boss_rejection' => 'bool',
		'leave_tolerance_times_active' => 'bool',
		'leave_rounding' => 'int',
		'leave_double_data' => 'int',
		'over_work_handle' => 'int',
		'fault_sign' => 'bool',
		'double_checking_time' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'name',
		'arrive_tolerance_time_minus',
		'arrive_tolerance_time_plus',
		'arrive_tolerance_time_out_boss_rejection',
		'arrive_tolerance_times_active',
		'arrive_rounding',
		'arrive_double_data',
		'leave_tolerance_time_minus',
		'leave_tolerance_time_plus',
		'leave_tolerance_time_out_boss_rejection',
		'leave_tolerance_times_active',
		'leave_rounding',
		'leave_double_data',
		'over_work_handle',
		'fault_sign',
		'double_checking_time'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function attendance_workplans()
	{
		return $this->hasMany(AttendanceWorkplan::class);
	}
}
