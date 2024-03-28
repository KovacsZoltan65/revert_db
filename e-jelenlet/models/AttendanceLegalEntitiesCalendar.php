<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesCalendar
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property Carbon $_date
 * @property int $balance
 * @property int $rolled_balance
 * @property int $balance_to_overtime
 * @property int $legal_entity_confirmed
 * @property Carbon|null $legal_entity_confirmed_date
 * @property int $boss_confirmed
 * @property Carbon|null $boss_confirmed_date
 * @property int|null $boss_confirmed_id
 * @property int|null $winaccess_failure
 * @property int $full_day_bonus
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreLegalEntity|null $core_legal_entity
 * @property Collection|AttendanceAccessControlSystemsCalendarRel[] $attendance_access_control_systems_calendar_rels
 * @property Collection|AttendanceLegalEntitiesAbscence[] $attendance_legal_entities_abscences
 * @property Collection|AttendanceLegalEntitiesBonusesWithinShift[] $attendance_legal_entities_bonuses_within_shifts
 * @property Collection|AttendancePlacesOfWork[] $attendance_places_of_works
 * @property Collection|AttendanceLegalEntitiesCalendarRejection[] $attendance_legal_entities_calendar_rejections
 * @property Collection|AttendanceLegalEntitiesOutsideShiftsTime[] $attendance_legal_entities_outside_shifts_times
 * @property Collection|AttendanceLegalEntitiesOvertime[] $attendance_legal_entities_overtimes
 * @property Collection|AttendanceLegalEntitiesShift[] $attendance_legal_entities_shifts
 * @property Collection|AttendanceLegalEntitiesShiftsBalance[] $attendance_legal_entities_shifts_balances
 * @property Collection|AttendanceLegalEntitiesShiftsWorkhour[] $attendance_legal_entities_shifts_workhours
 * @property Collection|AttendanceWorkdayDivision[] $attendance_workday_divisions
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesCalendar extends Model
{
	protected $table = 'attendance_legal_entities_calendar';

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'_date' => 'datetime',
		'balance' => 'int',
		'rolled_balance' => 'int',
		'balance_to_overtime' => 'int',
		'legal_entity_confirmed' => 'int',
		'legal_entity_confirmed_date' => 'datetime',
		'boss_confirmed' => 'int',
		'boss_confirmed_date' => 'datetime',
		'boss_confirmed_id' => 'int',
		'winaccess_failure' => 'int',
		'full_day_bonus' => 'int'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'_date',
		'balance',
		'rolled_balance',
		'balance_to_overtime',
		'legal_entity_confirmed',
		'legal_entity_confirmed_date',
		'boss_confirmed',
		'boss_confirmed_date',
		'boss_confirmed_id',
		'winaccess_failure',
		'full_day_bonus'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'boss_confirmed_id');
	}

	public function attendance_access_control_systems_calendar_rels()
	{
		return $this->hasMany(AttendanceAccessControlSystemsCalendarRel::class, 'calendar_id');
	}

	public function attendance_legal_entities_abscences()
	{
		return $this->hasMany(AttendanceLegalEntitiesAbscence::class, 'payroll_calendar_id');
	}

	public function attendance_legal_entities_bonuses_within_shifts()
	{
		return $this->hasMany(AttendanceLegalEntitiesBonusesWithinShift::class, 'payroll_calendar_id');
	}

	public function attendance_places_of_works()
	{
		return $this->belongsToMany(AttendancePlacesOfWork::class, 'attendance_legal_entities_calendar_attendance_places_of_work_rel')
					->withPivot('id');
	}

	public function attendance_legal_entities_calendar_rejections()
	{
		return $this->hasMany(AttendanceLegalEntitiesCalendarRejection::class);
	}

	public function attendance_legal_entities_outside_shifts_times()
	{
		return $this->hasMany(AttendanceLegalEntitiesOutsideShiftsTime::class);
	}

	public function attendance_legal_entities_overtimes()
	{
		return $this->hasMany(AttendanceLegalEntitiesOvertime::class, 'payroll_calendar_id');
	}

	public function attendance_legal_entities_shifts()
	{
		return $this->hasMany(AttendanceLegalEntitiesShift::class, 'payroll_calendar_id');
	}

	public function attendance_legal_entities_shifts_balances()
	{
		return $this->hasMany(AttendanceLegalEntitiesShiftsBalance::class, 'payroll_calendar_id');
	}

	public function attendance_legal_entities_shifts_workhours()
	{
		return $this->hasMany(AttendanceLegalEntitiesShiftsWorkhour::class, 'payroll_calendar_id');
	}

	public function attendance_workday_divisions()
	{
		return $this->hasMany(AttendanceWorkdayDivision::class);
	}
}
