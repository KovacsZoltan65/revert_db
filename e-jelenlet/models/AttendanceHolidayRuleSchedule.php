<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceHolidayRuleSchedule
 * 
 * @property int $id
 * @property int $attendance_holiday_rule_id
 * @property Carbon $planning_from_date
 * @property Carbon $planning_to_date
 * @property Carbon|null $planning_deadline
 * @property int $percentage_of_holidays
 * @property int|null $minimum_number_of_required_days
 * @property int|null $worker_has
 * @property int|null $required_at_once
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property AttendanceHolidayRule $attendance_holiday_rule
 * @property Collection|AttendanceHolidayRuleSchedulesPermissionGroupsRel[] $attendance_holiday_rule_schedules_permission_groups_rels
 *
 * @package App\Models
 */
class AttendanceHolidayRuleSchedule extends Model
{
	protected $table = 'attendance_holiday_rule_schedules';

	protected $casts = [
		'attendance_holiday_rule_id' => 'int',
		'planning_from_date' => 'datetime',
		'planning_to_date' => 'datetime',
		'planning_deadline' => 'datetime',
		'percentage_of_holidays' => 'int',
		'minimum_number_of_required_days' => 'int',
		'worker_has' => 'int',
		'required_at_once' => 'int'
	];

	protected $fillable = [
		'attendance_holiday_rule_id',
		'planning_from_date',
		'planning_to_date',
		'planning_deadline',
		'percentage_of_holidays',
		'minimum_number_of_required_days',
		'worker_has',
		'required_at_once'
	];

	public function attendance_holiday_rule()
	{
		return $this->belongsTo(AttendanceHolidayRule::class);
	}

	public function attendance_holiday_rule_schedules_permission_groups_rels()
	{
		return $this->hasMany(AttendanceHolidayRuleSchedulesPermissionGroupsRel::class);
	}
}
