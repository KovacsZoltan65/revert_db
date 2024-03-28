<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceWorkplan
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string|null $payroll_software_id
 * @property string $name
 * @property int|null $attendance_workplan_categories_id
 * @property int|null $attendance_verification_condition_systems_id
 * @property int $check_by_law
 * @property int $warning_or_forbidding
 * @property int|null $attendance_access_control_systems_id
 * @property int|null $attendance_access_control_systems_rule_id
 * @property int|null $holiday_bonus_id
 * @property int|null $restday_bonus_id
 * @property int|null $sunday_bonus_id
 * @property int|null $overtime_bonus_id
 * @property int|null $overtime_base_bonus_id
 * @property int|null $stand_by_bonus_id
 * @property int|null $duty_bonus_id
 * @property int $balance_collector
 * @property int $balance_rolling
 * @property int $overtime_automatically_balance
 * @property int $working_on_saturday
 * @property int $working_on_sunday
 * @property int $working_on_holiday
 * @property Carbon $workday_time_start
 * @property int $automatic_monitoring_bonus
 * @property bool $automatic_calculations_bonus
 * @property bool|null $how_quotient_of_difference_calculate_shift_bonus
 * @property int|null $minimum_difference_between_shift_starts
 * @property int $working_with_schedule_planner
 * @property int $supports_the_work_time_limits
 * @property Carbon|null $night_shift_start
 * @property Carbon|null $night_shift_end
 * @property int|null $night_shift_bonus_id
 * @property Carbon|null $afternoon_shift_start
 * @property Carbon|null $afternoon_shift_end
 * @property int|null $afternoon_shift_bonus_id
 * @property float|null $number_of_hours_per_day
 * @property int $number_of_hours_per_day_is_default_if_absence
 * @property int $status
 * @property Carbon|null $shift_bonus_start
 * @property Carbon|null $shift_bonus_end
 * @property int|null $shift_bonus_bonus_id
 * @property Carbon|null $extra_bonus_start
 * @property Carbon|null $extra_bonus_end
 * @property int|null $extra_bonus_bonus_id
 * @property int|null $travel_time_workday_bonus_type_id
 * @property int|null $travel_time_restday_bonus_type_id
 * @property int|null $preparation_time_length
 * @property int|null $preparation_time_range
 * @property string|null $preparation_time_bonus_id
 * @property int $show_day_details_menu
 * @property int $place_of_work_bonus_status_listen
 * 
 * @property CoreFirm $core_firm
 * @property AttendanceWorkplanCategory|null $attendance_workplan_category
 * @property AttendanceVerificationConditionSystem|null $attendance_verification_condition_system
 * @property AttendanceAccessControlSystem|null $attendance_access_control_system
 * @property AttendanceBonusType|null $attendance_bonus_type
 * @property AttendanceAccessControlSystemsRule|null $attendance_access_control_systems_rule
 * @property Collection|AttendanceWorkplanShift[] $attendance_workplan_shifts
 * @property Collection|AttendanceWorkplansAdditionalBonus[] $attendance_workplans_additional_bonuses
 * @property Collection|AttendanceWorkplansCoreLegalEntitiesRel[] $attendance_workplans_core_legal_entities_rels
 * @property Collection|AttendanceWorkplansFullDayBonus[] $attendance_workplans_full_day_bonuses
 *
 * @package App\Models
 */
class AttendanceWorkplan extends Model
{
	protected $table = 'attendance_workplans';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'attendance_workplan_categories_id' => 'int',
		'attendance_verification_condition_systems_id' => 'int',
		'check_by_law' => 'int',
		'warning_or_forbidding' => 'int',
		'attendance_access_control_systems_id' => 'int',
		'attendance_access_control_systems_rule_id' => 'int',
		'holiday_bonus_id' => 'int',
		'restday_bonus_id' => 'int',
		'sunday_bonus_id' => 'int',
		'overtime_bonus_id' => 'int',
		'overtime_base_bonus_id' => 'int',
		'stand_by_bonus_id' => 'int',
		'duty_bonus_id' => 'int',
		'balance_collector' => 'int',
		'balance_rolling' => 'int',
		'overtime_automatically_balance' => 'int',
		'working_on_saturday' => 'int',
		'working_on_sunday' => 'int',
		'working_on_holiday' => 'int',
		'workday_time_start' => 'datetime',
		'automatic_monitoring_bonus' => 'int',
		'automatic_calculations_bonus' => 'bool',
		'how_quotient_of_difference_calculate_shift_bonus' => 'bool',
		'minimum_difference_between_shift_starts' => 'int',
		'working_with_schedule_planner' => 'int',
		'supports_the_work_time_limits' => 'int',
		'night_shift_start' => 'datetime',
		'night_shift_end' => 'datetime',
		'night_shift_bonus_id' => 'int',
		'afternoon_shift_start' => 'datetime',
		'afternoon_shift_end' => 'datetime',
		'afternoon_shift_bonus_id' => 'int',
		'number_of_hours_per_day' => 'float',
		'number_of_hours_per_day_is_default_if_absence' => 'int',
		'status' => 'int',
		'shift_bonus_start' => 'datetime',
		'shift_bonus_end' => 'datetime',
		'shift_bonus_bonus_id' => 'int',
		'extra_bonus_start' => 'datetime',
		'extra_bonus_end' => 'datetime',
		'extra_bonus_bonus_id' => 'int',
		'travel_time_workday_bonus_type_id' => 'int',
		'travel_time_restday_bonus_type_id' => 'int',
		'preparation_time_length' => 'int',
		'preparation_time_range' => 'int',
		'show_day_details_menu' => 'int',
		'place_of_work_bonus_status_listen' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'payroll_software_id',
		'name',
		'attendance_workplan_categories_id',
		'attendance_verification_condition_systems_id',
		'check_by_law',
		'warning_or_forbidding',
		'attendance_access_control_systems_id',
		'attendance_access_control_systems_rule_id',
		'holiday_bonus_id',
		'restday_bonus_id',
		'sunday_bonus_id',
		'overtime_bonus_id',
		'overtime_base_bonus_id',
		'stand_by_bonus_id',
		'duty_bonus_id',
		'balance_collector',
		'balance_rolling',
		'overtime_automatically_balance',
		'working_on_saturday',
		'working_on_sunday',
		'working_on_holiday',
		'workday_time_start',
		'automatic_monitoring_bonus',
		'automatic_calculations_bonus',
		'how_quotient_of_difference_calculate_shift_bonus',
		'minimum_difference_between_shift_starts',
		'working_with_schedule_planner',
		'supports_the_work_time_limits',
		'night_shift_start',
		'night_shift_end',
		'night_shift_bonus_id',
		'afternoon_shift_start',
		'afternoon_shift_end',
		'afternoon_shift_bonus_id',
		'number_of_hours_per_day',
		'number_of_hours_per_day_is_default_if_absence',
		'status',
		'shift_bonus_start',
		'shift_bonus_end',
		'shift_bonus_bonus_id',
		'extra_bonus_start',
		'extra_bonus_end',
		'extra_bonus_bonus_id',
		'travel_time_workday_bonus_type_id',
		'travel_time_restday_bonus_type_id',
		'preparation_time_length',
		'preparation_time_range',
		'preparation_time_bonus_id',
		'show_day_details_menu',
		'place_of_work_bonus_status_listen'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function attendance_workplan_category()
	{
		return $this->belongsTo(AttendanceWorkplanCategory::class, 'attendance_workplan_categories_id');
	}

	public function attendance_verification_condition_system()
	{
		return $this->belongsTo(AttendanceVerificationConditionSystem::class, 'attendance_verification_condition_systems_id');
	}

	public function attendance_access_control_system()
	{
		return $this->belongsTo(AttendanceAccessControlSystem::class, 'attendance_access_control_systems_id');
	}

	public function attendance_bonus_type()
	{
		return $this->belongsTo(AttendanceBonusType::class, 'travel_time_restday_bonus_type_id');
	}

	public function attendance_access_control_systems_rule()
	{
		return $this->belongsTo(AttendanceAccessControlSystemsRule::class);
	}

	public function attendance_workplan_shifts()
	{
		return $this->hasMany(AttendanceWorkplanShift::class, 'attendance_workplans_id');
	}

	public function attendance_workplans_additional_bonuses()
	{
		return $this->hasMany(AttendanceWorkplansAdditionalBonus::class, 'attendance_workplans_id');
	}

	public function attendance_workplans_core_legal_entities_rels()
	{
		return $this->hasMany(AttendanceWorkplansCoreLegalEntitiesRel::class, 'attendance_workplans_id');
	}

	public function attendance_workplans_full_day_bonuses()
	{
		return $this->hasMany(AttendanceWorkplansFullDayBonus::class, 'attendance_workplans_id');
	}
}
