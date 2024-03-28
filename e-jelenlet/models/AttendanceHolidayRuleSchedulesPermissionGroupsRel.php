<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceHolidayRuleSchedulesPermissionGroupsRel
 * 
 * @property int $id
 * @property int $attendance_holiday_rule_schedule_id
 * @property int $core_permission_group_id
 * 
 * @property AttendanceHolidayRuleSchedule $attendance_holiday_rule_schedule
 *
 * @package App\Models
 */
class AttendanceHolidayRuleSchedulesPermissionGroupsRel extends Model
{
	protected $table = 'attendance_holiday_rule_schedules_permission_groups_rel';
	public $timestamps = false;

	protected $casts = [
		'attendance_holiday_rule_schedule_id' => 'int',
		'core_permission_group_id' => 'int'
	];

	protected $fillable = [
		'attendance_holiday_rule_schedule_id',
		'core_permission_group_id'
	];

	public function attendance_holiday_rule_schedule()
	{
		return $this->belongsTo(AttendanceHolidayRuleSchedule::class);
	}
}
