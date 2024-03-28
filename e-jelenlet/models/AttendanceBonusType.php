<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceBonusType
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string|null $payroll_software_id
 * @property string $name
 * @property int $status
 * @property int $overtime
 * @property int $bonus_within_shift
 * @property int $excess_hour
 * @property int $deficit_hour
 * @property int $abscence_hour
 * @property int $rest_time_difference
 * 
 * @property CoreFirm $core_firm
 * @property Collection|AttendanceLegalEntitiesBonusesWithinShift[] $attendance_legal_entities_bonuses_within_shifts
 * @property Collection|AttendanceLegalEntitiesOutsideShiftsTimeBonusesRel[] $attendance_legal_entities_outside_shifts_time_bonuses_rels
 * @property Collection|AttendanceLegalEntitiesOvertimesBonusesRel[] $attendance_legal_entities_overtimes_bonuses_rels
 * @property Collection|AttendancePlacesOfWorkBonusesRel[] $attendance_places_of_work_bonuses_rels
 * @property Collection|AttendanceShiftType[] $attendance_shift_types
 * @property Collection|AttendanceWorkplan[] $attendance_workplans
 * @property Collection|AttendanceWorkplansAdditionalBonus[] $attendance_workplans_additional_bonuses
 * @property Collection|AttendanceWorkplansFullDayBonus[] $attendance_workplans_full_day_bonuses
 * @property Collection|AttendanceWorktimelimitAbscenceBonu[] $attendance_worktimelimit_abscence_bonus
 * @property Collection|AttendanceWorktimelimitDeficit[] $attendance_worktimelimit_deficits
 * @property Collection|AttendanceWorktimelimitExcess[] $attendance_worktimelimit_excesses
 * @property Collection|AttendanceWorktimelimitRestTimeDifferenceBonu[] $attendance_worktimelimit_rest_time_difference_bonus
 *
 * @package App\Models
 */
class AttendanceBonusType extends Model
{
	protected $table = 'attendance_bonus_types';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'status' => 'int',
		'overtime' => 'int',
		'bonus_within_shift' => 'int',
		'excess_hour' => 'int',
		'deficit_hour' => 'int',
		'abscence_hour' => 'int',
		'rest_time_difference' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'payroll_software_id',
		'name',
		'status',
		'overtime',
		'bonus_within_shift',
		'excess_hour',
		'deficit_hour',
		'abscence_hour',
		'rest_time_difference'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function attendance_legal_entities_bonuses_within_shifts()
	{
		return $this->hasMany(AttendanceLegalEntitiesBonusesWithinShift::class, 'attendance_bonus_types_id');
	}

	public function attendance_legal_entities_outside_shifts_time_bonuses_rels()
	{
		return $this->hasMany(AttendanceLegalEntitiesOutsideShiftsTimeBonusesRel::class, 'attendance_bonus_types_id');
	}

	public function attendance_legal_entities_overtimes_bonuses_rels()
	{
		return $this->hasMany(AttendanceLegalEntitiesOvertimesBonusesRel::class, 'attendance_bonus_types_id');
	}

	public function attendance_places_of_work_bonuses_rels()
	{
		return $this->hasMany(AttendancePlacesOfWorkBonusesRel::class, 'attendance_bonus_types_id');
	}

	public function attendance_shift_types()
	{
		return $this->hasMany(AttendanceShiftType::class, 'holiday_bonus_type_id');
	}

	public function attendance_workplans()
	{
		return $this->hasMany(AttendanceWorkplan::class, 'travel_time_restday_bonus_type_id');
	}

	public function attendance_workplans_additional_bonuses()
	{
		return $this->hasMany(AttendanceWorkplansAdditionalBonus::class, 'attendance_bonus_types_id');
	}

	public function attendance_workplans_full_day_bonuses()
	{
		return $this->hasMany(AttendanceWorkplansFullDayBonus::class, 'attendance_bonus_types_id');
	}

	public function attendance_worktimelimit_abscence_bonus()
	{
		return $this->hasMany(AttendanceWorktimelimitAbscenceBonu::class, 'attendance_bonus_types_id');
	}

	public function attendance_worktimelimit_deficits()
	{
		return $this->hasMany(AttendanceWorktimelimitDeficit::class, 'attendance_bonus_types_id');
	}

	public function attendance_worktimelimit_excesses()
	{
		return $this->hasMany(AttendanceWorktimelimitExcess::class, 'attendance_bonus_types_id');
	}

	public function attendance_worktimelimit_rest_time_difference_bonus()
	{
		return $this->hasMany(AttendanceWorktimelimitRestTimeDifferenceBonu::class, 'attendance_bonus_types_id');
	}
}
