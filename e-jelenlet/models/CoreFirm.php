<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreFirm
 * 
 * @property int $id
 * @property string $registration_number
 * @property string $tax_id
 * @property string $name
 * @property string $directory
 * @property int $postal_code
 * @property int $core_cities_id
 * @property string $public_place_name
 * @property int $core_public_places_id
 * @property string $public_place_number
 * @property string $staircase
 * @property string $floor_door
 * @property string $phone_number
 * @property int $status
 * @property string $notification_sender
 * @property int $default_id
 * @property string|null $default_name
 * @property int $skip_tax_id_validation
 * 
 * @property CoreCity $core_city
 * @property CorePublicPlace $core_public_place
 * @property Collection|AttendanceAbscenceType[] $attendance_abscence_types
 * @property Collection|AttendanceAccessControlSystemsExtraAddress[] $attendance_access_control_systems_extra_addresses
 * @property Collection|AttendanceAccessControlSystemsRule[] $attendance_access_control_systems_rules
 * @property Collection|AttendanceAttendanceSheetExportSetting[] $attendance_attendance_sheet_export_settings
 * @property Collection|AttendanceAttendanceSheetSetting[] $attendance_attendance_sheet_settings
 * @property Collection|AttendanceBonusType[] $attendance_bonus_types
 * @property Collection|AttendanceLegalStock[] $attendance_legal_stocks
 * @property Collection|AttendanceOffdayType[] $attendance_offday_types
 * @property Collection|AttendancePlacesOfWork[] $attendance_places_of_works
 * @property Collection|AttendanceRoundingSetting[] $attendance_rounding_settings
 * @property Collection|AttendanceShiftType[] $attendance_shift_types
 * @property Collection|AttendanceStandbyType[] $attendance_standby_types
 * @property Collection|AttendanceVerificationConditionSystem[] $attendance_verification_condition_systems
 * @property Collection|AttendanceWorkdayDivisionsOrder[] $attendance_workday_divisions_orders
 * @property Collection|AttendanceWorkplan[] $attendance_workplans
 * @property Collection|AttendanceWorktimelimit[] $attendance_worktimelimits
 * @property Collection|CoreActivity[] $core_activities
 * @property Collection|CoreAllowCronJob[] $core_allow_cron_jobs
 * @property Collection|CoreCostCenter[] $core_cost_centers
 * @property Collection|CoreCustomReport[] $core_custom_reports
 * @property Collection|CoreDepartment[] $core_departments
 * @property Collection|CoreEmailNotificationSubject[] $core_email_notification_subjects
 * @property Collection|CoreEmailNotificationType[] $core_email_notification_types
 * @property Collection|CoreEstablishment[] $core_establishments
 * @property Collection|CoreExtendedHierarchy[] $core_extended_hierarchies
 * @property Collection|CoreModule[] $core_modules
 * @property Collection|CoreComponent[] $core_components
 * @property Collection|CoreGeneralLedgerAnalytic[] $core_general_ledger_analytics
 * @property Collection|CoreGeneralLedgerAnalyticsValue[] $core_general_ledger_analytics_values
 * @property Collection|CoreHierarchy[] $core_hierarchies
 * @property Collection|CoreHoliday[] $core_holidays
 * @property Collection|CoreLog[] $core_logs
 * @property Collection|CoreOtherIncome[] $core_other_incomes
 * @property Collection|CoreParameter[] $core_parameters
 * @property Collection|CorePermissionGroup[] $core_permission_groups
 * @property Collection|CoreProfitCenter[] $core_profit_centers
 * @property Collection|CoreReport[] $core_reports
 * @property Collection|CoreSpecialPermission[] $core_special_permissions
 * @property Collection|CoreTemporaryHierarchy[] $core_temporary_hierarchies
 * @property Collection|CoreUniqueReport[] $core_unique_reports
 *
 * @package App\Models
 */
class CoreFirm extends Model
{
	protected $table = 'core_firms';
	public $timestamps = false;

	protected $casts = [
		'postal_code' => 'int',
		'core_cities_id' => 'int',
		'core_public_places_id' => 'int',
		'status' => 'int',
		'default_id' => 'int',
		'skip_tax_id_validation' => 'int'
	];

	protected $fillable = [
		'registration_number',
		'tax_id',
		'name',
		'directory',
		'postal_code',
		'core_cities_id',
		'public_place_name',
		'core_public_places_id',
		'public_place_number',
		'staircase',
		'floor_door',
		'phone_number',
		'status',
		'notification_sender',
		'default_id',
		'default_name',
		'skip_tax_id_validation'
	];

	public function core_city()
	{
		return $this->belongsTo(CoreCity::class, 'core_cities_id');
	}

	public function core_public_place()
	{
		return $this->belongsTo(CorePublicPlace::class, 'core_public_places_id');
	}

	public function attendance_abscence_types()
	{
		return $this->belongsToMany(AttendanceAbscenceType::class, 'attendance_abscence_types_core_firms_rel', 'core_firms_id', 'attendance_abscence_types_id')
					->withPivot('id', 'status', 'bonus_status', 'worktime_status', 'core_other_incomes_id', 'authorization');
	}

	public function attendance_access_control_systems_extra_addresses()
	{
		return $this->hasMany(AttendanceAccessControlSystemsExtraAddress::class, 'core_firms_id');
	}

	public function attendance_access_control_systems_rules()
	{
		return $this->hasMany(AttendanceAccessControlSystemsRule::class, 'core_firms_id');
	}

	public function attendance_attendance_sheet_export_settings()
	{
		return $this->hasMany(AttendanceAttendanceSheetExportSetting::class, 'core_firms_id');
	}

	public function attendance_attendance_sheet_settings()
	{
		return $this->hasMany(AttendanceAttendanceSheetSetting::class, 'core_firms_id');
	}

	public function attendance_bonus_types()
	{
		return $this->hasMany(AttendanceBonusType::class, 'core_firms_id');
	}

	public function attendance_legal_stocks()
	{
		return $this->hasMany(AttendanceLegalStock::class, 'core_firms_id');
	}

	public function attendance_offday_types()
	{
		return $this->belongsToMany(AttendanceOffdayType::class, 'attendance_offday_types_core_firms_order', 'core_firms_id', 'attendance_offday_types_id')
					->withPivot('id', '_order', 'status', 'core_other_incomes_id');
	}

	public function attendance_places_of_works()
	{
		return $this->hasMany(AttendancePlacesOfWork::class, 'core_firms_id');
	}

	public function attendance_rounding_settings()
	{
		return $this->hasMany(AttendanceRoundingSetting::class, 'core_firms_id');
	}

	public function attendance_shift_types()
	{
		return $this->hasMany(AttendanceShiftType::class, 'core_firms_id');
	}

	public function attendance_standby_types()
	{
		return $this->hasMany(AttendanceStandbyType::class, 'core_firms_id');
	}

	public function attendance_verification_condition_systems()
	{
		return $this->hasMany(AttendanceVerificationConditionSystem::class, 'core_firms_id');
	}

	public function attendance_workday_divisions_orders()
	{
		return $this->hasMany(AttendanceWorkdayDivisionsOrder::class, 'core_firms_id');
	}

	public function attendance_workplans()
	{
		return $this->hasMany(AttendanceWorkplan::class, 'core_firms_id');
	}

	public function attendance_worktimelimits()
	{
		return $this->hasMany(AttendanceWorktimelimit::class, 'core_firms_id');
	}

	public function core_activities()
	{
		return $this->hasMany(CoreActivity::class, 'core_firms_id');
	}

	public function core_allow_cron_jobs()
	{
		return $this->hasMany(CoreAllowCronJob::class, 'core_firms_id');
	}

	public function core_cost_centers()
	{
		return $this->hasMany(CoreCostCenter::class, 'core_firms_id');
	}

	public function core_custom_reports()
	{
		return $this->hasMany(CoreCustomReport::class, 'core_firms_id');
	}

	public function core_departments()
	{
		return $this->hasMany(CoreDepartment::class, 'core_firms_id');
	}

	public function core_email_notification_subjects()
	{
		return $this->hasMany(CoreEmailNotificationSubject::class, 'core_firms_id');
	}

	public function core_email_notification_types()
	{
		return $this->hasMany(CoreEmailNotificationType::class, 'core_firms_id');
	}

	public function core_establishments()
	{
		return $this->hasMany(CoreEstablishment::class, 'core_firms_id');
	}

	public function core_extended_hierarchies()
	{
		return $this->hasMany(CoreExtendedHierarchy::class, 'core_firms_id');
	}

	public function core_modules()
	{
		return $this->belongsToMany(CoreModule::class, 'core_extra_permission_core_modules_core_firms_rel', 'core_firms_id', 'core_modules_id')
					->withPivot('id', 'usable', 'name');
	}

	public function core_components()
	{
		return $this->belongsToMany(CoreComponent::class, 'core_firms_core_components_rel', 'core_firms_id', 'core_components_id')
					->withPivot('id');
	}

	public function core_general_ledger_analytics()
	{
		return $this->hasMany(CoreGeneralLedgerAnalytic::class, 'core_firms_id');
	}

	public function core_general_ledger_analytics_values()
	{
		return $this->hasMany(CoreGeneralLedgerAnalyticsValue::class, 'core_firms_id');
	}

	public function core_hierarchies()
	{
		return $this->hasMany(CoreHierarchy::class, 'core_firms_id');
	}

	public function core_holidays()
	{
		return $this->hasMany(CoreHoliday::class, 'core_firms_id');
	}

	public function core_logs()
	{
		return $this->hasMany(CoreLog::class, 'core_firms_id');
	}

	public function core_other_incomes()
	{
		return $this->hasMany(CoreOtherIncome::class, 'core_firms_id');
	}

	public function core_parameters()
	{
		return $this->belongsToMany(CoreParameter::class, 'core_parameters_core_firms_values', 'core_firms_id', 'core_parameters_id')
					->withPivot('id', 'value');
	}

	public function core_permission_groups()
	{
		return $this->hasMany(CorePermissionGroup::class, 'core_firms_id');
	}

	public function core_profit_centers()
	{
		return $this->hasMany(CoreProfitCenter::class, 'core_firms_id');
	}

	public function core_reports()
	{
		return $this->hasMany(CoreReport::class, 'core_firms_id');
	}

	public function core_special_permissions()
	{
		return $this->hasMany(CoreSpecialPermission::class, 'core_firms_id');
	}

	public function core_temporary_hierarchies()
	{
		return $this->hasMany(CoreTemporaryHierarchy::class, 'core_firms_id');
	}

	public function core_unique_reports()
	{
		return $this->hasMany(CoreUniqueReport::class, 'core_firms_id');
	}
}
