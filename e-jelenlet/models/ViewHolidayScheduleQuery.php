<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ViewHolidayScheduleQuery
 * 
 * @property int $core_legal_entities_id
 * @property int $attendance_holiday_rule_id
 * @property string $holiday_rule_name
 * @property int|null $attendance_holiday_rules_schedule_id
 * @property string|null $core_permission_group_id
 * @property int $planning_year
 * @property Carbon|null $planning_from_date
 * @property Carbon|null $planning_to_date
 * @property Carbon|null $planning_deadline
 * @property int|null $percentage_of_holidays
 * @property int|null $minimum_number_of_required_days
 * @property int|null $worker_has
 * @property int|null $required_at_once
 * @property float|null $total_holiday_amounts
 * @property float|null $so_far_total
 * @property float|null $percentage_proportionally_holiday_amounts
 * @property float|null $used
 * @property string|null $used_dates
 * @property string|null $used_created_ats
 * @property string|null $used_abscences_ids
 * @property float|null $planned
 * @property string|null $planned_dates
 * @property string|null $planned_created_ats
 * @property string|null $planned_abscences_ids
 *
 * @package App\Models
 */
class ViewHolidayScheduleQuery extends Model
{
	protected $table = 'view_holiday_schedule_query';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'attendance_holiday_rule_id' => 'int',
		'attendance_holiday_rules_schedule_id' => 'int',
		'planning_year' => 'int',
		'planning_from_date' => 'datetime',
		'planning_to_date' => 'datetime',
		'planning_deadline' => 'datetime',
		'percentage_of_holidays' => 'int',
		'minimum_number_of_required_days' => 'int',
		'worker_has' => 'int',
		'required_at_once' => 'int',
		'total_holiday_amounts' => 'float',
		'so_far_total' => 'float',
		'percentage_proportionally_holiday_amounts' => 'float',
		'used' => 'float',
		'planned' => 'float'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'attendance_holiday_rule_id',
		'holiday_rule_name',
		'attendance_holiday_rules_schedule_id',
		'core_permission_group_id',
		'planning_year',
		'planning_from_date',
		'planning_to_date',
		'planning_deadline',
		'percentage_of_holidays',
		'minimum_number_of_required_days',
		'worker_has',
		'required_at_once',
		'total_holiday_amounts',
		'so_far_total',
		'percentage_proportionally_holiday_amounts',
		'used',
		'used_dates',
		'used_created_ats',
		'used_abscences_ids',
		'planned',
		'planned_dates',
		'planned_created_ats',
		'planned_abscences_ids'
	];
}
