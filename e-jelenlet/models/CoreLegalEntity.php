<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLegalEntity
 * 
 * @property int $id
 * 
 * @property Collection|AttendanceApprovalButton[] $attendance_approval_buttons
 * @property Collection|AttendanceApprovalLink[] $attendance_approval_links
 * @property Collection|AttendanceLegalEntitiesAbscence[] $attendance_legal_entities_abscences
 * @property Collection|AttendanceLegalEntitiesBonusesWithinShift[] $attendance_legal_entities_bonuses_within_shifts
 * @property Collection|AttendanceLegalEntitiesCalendar[] $attendance_legal_entities_calendars
 * @property Collection|AttendanceLegalEntitiesCalendarRejection[] $attendance_legal_entities_calendar_rejections
 * @property Collection|AttendanceLegalEntitiesCarriedBalance[] $attendance_legal_entities_carried_balances
 * @property Collection|AttendanceLegalEntitiesDetailsBackup[] $attendance_legal_entities_details_backups
 * @property Collection|AttendanceLegalEntitiesHolidayAmount[] $attendance_legal_entities_holiday_amounts
 * @property Collection|AttendanceLegalEntitiesOutsideShiftsTime[] $attendance_legal_entities_outside_shifts_times
 * @property Collection|AttendanceLegalEntitiesOvertime[] $attendance_legal_entities_overtimes
 * @property Collection|AttendanceLegalStock[] $attendance_legal_stocks
 * @property Collection|AttendanceWorkplansCoreLegalEntitiesRel[] $attendance_workplans_core_legal_entities_rels
 * @property Collection|AttendanceWorktimelimitAssignment[] $attendance_worktimelimit_assignments
 * @property Collection|CoreCustomReport[] $core_custom_reports
 * @property Collection|CoreEmailNotification[] $core_email_notifications
 * @property Collection|CoreExtendedHierarchy[] $core_extended_hierarchies
 * @property Collection|CoreExtraEmailAddress[] $core_extra_email_addresses
 * @property Collection|CoreHierarchy[] $core_hierarchies
 * @property Collection|CoreLegalEntitiesAttributesValue[] $core_legal_entities_attributes_values
 * @property Collection|CoreLegalEntitiesCoreActivitiesAssignment[] $core_legal_entities_core_activities_assignments
 * @property Collection|CoreLegalEntitiesCostCenterAssignment[] $core_legal_entities_cost_center_assignments
 * @property Collection|CoreLegalEntitiesDepartmentAssignment[] $core_legal_entities_department_assignments
 * @property Collection|CoreLegalEntitiesEstablishmentAssignment[] $core_legal_entities_establishment_assignments
 * @property Collection|CoreLegalEntitiesGeneralLedgerAnalyticValueAssignment[] $core_legal_entities_general_ledger_analytic_value_assignments
 * @property Collection|CoreLegalEntitiesProfitCenterAssignment[] $core_legal_entities_profit_center_assignments
 * @property Collection|CoreLog[] $core_logs
 * @property Collection|CorePermissionGroupsCoreLegalEntitiesRel[] $core_permission_groups_core_legal_entities_rels
 * @property Collection|CoreReport[] $core_reports
 * @property Collection|CoreSavedLegalEntityFilter[] $core_saved_legal_entity_filters
 * @property Collection|CoreSessionContainer[] $core_session_containers
 * @property Collection|CoreSpecialPersonStatus[] $core_special_person_statuses
 * @property Collection|CoreSubstitution[] $core_substitutions
 * @property Collection|CoreSurfaceNotification[] $core_surface_notifications
 * @property Collection|CoreTemporaryHierarchy[] $core_temporary_hierarchies
 * @property Collection|CoreUniqueReport[] $core_unique_reports
 *
 * @package App\Models
 */
class CoreLegalEntity extends Model
{
	protected $table = 'core_legal_entities';
	public $timestamps = false;

	public function attendance_approval_buttons()
	{
		return $this->hasMany(AttendanceApprovalButton::class, 'legalentity_id');
	}

	public function attendance_approval_links()
	{
		return $this->hasMany(AttendanceApprovalLink::class, 'legalentity_id');
	}

	public function attendance_legal_entities_abscences()
	{
		return $this->hasMany(AttendanceLegalEntitiesAbscence::class, 'creator_legal_entity_id');
	}

	public function attendance_legal_entities_bonuses_within_shifts()
	{
		return $this->hasMany(AttendanceLegalEntitiesBonusesWithinShift::class, 'creator_legal_entity_id');
	}

	public function attendance_legal_entities_calendars()
	{
		return $this->hasMany(AttendanceLegalEntitiesCalendar::class, 'boss_confirmed_id');
	}

	public function attendance_legal_entities_calendar_rejections()
	{
		return $this->hasMany(AttendanceLegalEntitiesCalendarRejection::class, 'core_legal_entities_id');
	}

	public function attendance_legal_entities_carried_balances()
	{
		return $this->hasMany(AttendanceLegalEntitiesCarriedBalance::class, 'core_legal_entities_id');
	}

	public function attendance_legal_entities_details_backups()
	{
		return $this->hasMany(AttendanceLegalEntitiesDetailsBackup::class, 'core_legal_entities_id');
	}

	public function attendance_legal_entities_holiday_amounts()
	{
		return $this->hasMany(AttendanceLegalEntitiesHolidayAmount::class, 'core_legal_entities_id');
	}

	public function attendance_legal_entities_outside_shifts_times()
	{
		return $this->hasMany(AttendanceLegalEntitiesOutsideShiftsTime::class, 'creator_legal_entity_id');
	}

	public function attendance_legal_entities_overtimes()
	{
		return $this->hasMany(AttendanceLegalEntitiesOvertime::class, 'creator_legal_entity_id');
	}

	public function attendance_legal_stocks()
	{
		return $this->hasMany(AttendanceLegalStock::class, 'core_legal_entities_id');
	}

	public function attendance_workplans_core_legal_entities_rels()
	{
		return $this->hasMany(AttendanceWorkplansCoreLegalEntitiesRel::class, 'core_legal_entities_id');
	}

	public function attendance_worktimelimit_assignments()
	{
		return $this->hasMany(AttendanceWorktimelimitAssignment::class, 'core_legal_entities_id');
	}

	public function core_custom_reports()
	{
		return $this->hasMany(CoreCustomReport::class, 'core_legal_entities_id');
	}

	public function core_email_notifications()
	{
		return $this->hasMany(CoreEmailNotification::class, 'source_core_legal_entities_id');
	}

	public function core_extended_hierarchies()
	{
		return $this->hasMany(CoreExtendedHierarchy::class, 'child_core_legal_entities_id');
	}

	public function core_extra_email_addresses()
	{
		return $this->hasMany(CoreExtraEmailAddress::class, 'core_legal_entities_id');
	}

	public function core_hierarchies()
	{
		return $this->hasMany(CoreHierarchy::class, 'child_core_legal_entities_id');
	}

	public function core_legal_entities_attributes_values()
	{
		return $this->hasMany(CoreLegalEntitiesAttributesValue::class, 'core_legal_entities_id');
	}

	public function core_legal_entities_core_activities_assignments()
	{
		return $this->hasMany(CoreLegalEntitiesCoreActivitiesAssignment::class, 'core_legal_entities_id');
	}

	public function core_legal_entities_cost_center_assignments()
	{
		return $this->hasMany(CoreLegalEntitiesCostCenterAssignment::class, 'core_legal_entities_id');
	}

	public function core_legal_entities_department_assignments()
	{
		return $this->hasMany(CoreLegalEntitiesDepartmentAssignment::class, 'core_legal_entities_id');
	}

	public function core_legal_entities_establishment_assignments()
	{
		return $this->hasMany(CoreLegalEntitiesEstablishmentAssignment::class, 'core_legal_entities_id');
	}

	public function core_legal_entities_general_ledger_analytic_value_assignments()
	{
		return $this->hasMany(CoreLegalEntitiesGeneralLedgerAnalyticValueAssignment::class, 'core_legal_entities_id');
	}

	public function core_legal_entities_profit_center_assignments()
	{
		return $this->hasMany(CoreLegalEntitiesProfitCenterAssignment::class, 'core_legal_entities_id');
	}

	public function core_logs()
	{
		return $this->hasMany(CoreLog::class, 'core_legal_entities_id');
	}

	public function core_permission_groups_core_legal_entities_rels()
	{
		return $this->hasMany(CorePermissionGroupsCoreLegalEntitiesRel::class, 'core_legal_entities_id');
	}

	public function core_reports()
	{
		return $this->hasMany(CoreReport::class, 'core_legal_entities_id');
	}

	public function core_saved_legal_entity_filters()
	{
		return $this->hasMany(CoreSavedLegalEntityFilter::class, 'core_legal_entities_id');
	}

	public function core_session_containers()
	{
		return $this->hasMany(CoreSessionContainer::class, 'core_legal_entities_id');
	}

	public function core_special_person_statuses()
	{
		return $this->hasMany(CoreSpecialPersonStatus::class, 'core_legal_entities_id');
	}

	public function core_substitutions()
	{
		return $this->hasMany(CoreSubstitution::class, 'core_legal_entities_id');
	}

	public function core_surface_notifications()
	{
		return $this->hasMany(CoreSurfaceNotification::class, 'source_legal_entities_id');
	}

	public function core_temporary_hierarchies()
	{
		return $this->hasMany(CoreTemporaryHierarchy::class, 'child_core_legal_entities_id');
	}

	public function core_unique_reports()
	{
		return $this->hasMany(CoreUniqueReport::class, 'core_legal_entities_id');
	}
}
