<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesShift
 * 
 * @property int $id
 * @property int|null $registered_calendar_id
 * @property int|null $payroll_calendar_id
 * @property int|null $attendance_shift_types_id
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property int $shift_break_time
 * @property int $balance_flag
 * @property Carbon|null $preparation_start
 * @property Carbon|null $preparation_end
 * 
 * @property AttendanceLegalEntitiesCalendar|null $attendance_legal_entities_calendar
 * @property AttendanceShiftType|null $attendance_shift_type
 * @property Collection|AttendanceLegalEntitiesAbscence[] $attendance_legal_entities_abscences
 * @property Collection|AttendanceLegalEntitiesBonusesWithinShift[] $attendance_legal_entities_bonuses_within_shifts
 * @property Collection|AttendanceLegalEntitiesOvertime[] $attendance_legal_entities_overtimes
 * @property Collection|AttendanceLegalEntitiesShiftsBalance[] $attendance_legal_entities_shifts_balances
 * @property Collection|AttendanceLegalEntitiesShiftsWorkhour[] $attendance_legal_entities_shifts_workhours
 * @property Collection|AttendanceWorkdayDivision[] $attendance_workday_divisions
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesShift extends Model
{
	protected $table = 'attendance_legal_entities_shifts';
	public $timestamps = false;

	protected $casts = [
		'registered_calendar_id' => 'int',
		'payroll_calendar_id' => 'int',
		'attendance_shift_types_id' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'shift_break_time' => 'int',
		'balance_flag' => 'int',
		'preparation_start' => 'datetime',
		'preparation_end' => 'datetime'
	];

	protected $fillable = [
		'registered_calendar_id',
		'payroll_calendar_id',
		'attendance_shift_types_id',
		'start_time',
		'end_time',
		'shift_break_time',
		'balance_flag',
		'preparation_start',
		'preparation_end'
	];

	public function attendance_legal_entities_calendar()
	{
		return $this->belongsTo(AttendanceLegalEntitiesCalendar::class, 'payroll_calendar_id');
	}

	public function attendance_shift_type()
	{
		return $this->belongsTo(AttendanceShiftType::class, 'attendance_shift_types_id');
	}

	public function attendance_legal_entities_abscences()
	{
		return $this->hasMany(AttendanceLegalEntitiesAbscence::class, 'attendance_legal_entities_shifts_id');
	}

	public function attendance_legal_entities_bonuses_within_shifts()
	{
		return $this->hasMany(AttendanceLegalEntitiesBonusesWithinShift::class, 'attendance_legal_entities_shifts_id');
	}

	public function attendance_legal_entities_overtimes()
	{
		return $this->hasMany(AttendanceLegalEntitiesOvertime::class, 'attendance_legal_entities_shifts_id');
	}

	public function attendance_legal_entities_shifts_balances()
	{
		return $this->hasMany(AttendanceLegalEntitiesShiftsBalance::class, 'attendance_legal_entities_shifts_id');
	}

	public function attendance_legal_entities_shifts_workhours()
	{
		return $this->hasMany(AttendanceLegalEntitiesShiftsWorkhour::class, 'attendance_legal_entities_shifts_id');
	}

	public function attendance_workday_divisions()
	{
		return $this->hasMany(AttendanceWorkdayDivision::class, 'attendance_legal_entities_shifts_id');
	}
}
