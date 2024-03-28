<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceWorkdayDivision
 * 
 * @property int $id
 * @property int $attendance_legal_entities_calendar_id
 * @property int|null $attendance_legal_entities_shifts_id
 * @property int|null $attendance_shift_breaks_id
 * @property int|null $attendance_legal_entities_overtimes_id
 * @property int|null $attendance_legal_entities_outside_shifts_time_id
 * @property int|null $attendance_standby_overtimes_id
 * @property int|null $attendance_legal_entities_abscences_id
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property int|null $percent_start
 * @property int|null $percent_end
 * @property array|null $categories
 * 
 * @property AttendanceLegalEntitiesCalendar $attendance_legal_entities_calendar
 * @property AttendanceLegalEntitiesShift|null $attendance_legal_entities_shift
 * @property AttendanceLegalEntitiesOvertime|null $attendance_legal_entities_overtime
 * @property AttendanceLegalEntitiesOutsideShiftsTime|null $attendance_legal_entities_outside_shifts_time
 * @property AttendanceStandbyOvertime|null $attendance_standby_overtime
 * @property AttendanceLegalEntitiesAbscence|null $attendance_legal_entities_abscence
 * @property AttendanceShiftBreak|null $attendance_shift_break
 *
 * @package App\Models
 */
class AttendanceWorkdayDivision extends Model
{
	protected $table = 'attendance_workday_divisions';
	public $timestamps = false;

	protected $casts = [
		'attendance_legal_entities_calendar_id' => 'int',
		'attendance_legal_entities_shifts_id' => 'int',
		'attendance_shift_breaks_id' => 'int',
		'attendance_legal_entities_overtimes_id' => 'int',
		'attendance_legal_entities_outside_shifts_time_id' => 'int',
		'attendance_standby_overtimes_id' => 'int',
		'attendance_legal_entities_abscences_id' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'percent_start' => 'int',
		'percent_end' => 'int',
		'categories' => 'json'
	];

	protected $fillable = [
		'attendance_legal_entities_calendar_id',
		'attendance_legal_entities_shifts_id',
		'attendance_shift_breaks_id',
		'attendance_legal_entities_overtimes_id',
		'attendance_legal_entities_outside_shifts_time_id',
		'attendance_standby_overtimes_id',
		'attendance_legal_entities_abscences_id',
		'start_time',
		'end_time',
		'percent_start',
		'percent_end',
		'categories'
	];

	public function attendance_legal_entities_calendar()
	{
		return $this->belongsTo(AttendanceLegalEntitiesCalendar::class);
	}

	public function attendance_legal_entities_shift()
	{
		return $this->belongsTo(AttendanceLegalEntitiesShift::class, 'attendance_legal_entities_shifts_id');
	}

	public function attendance_legal_entities_overtime()
	{
		return $this->belongsTo(AttendanceLegalEntitiesOvertime::class, 'attendance_legal_entities_overtimes_id');
	}

	public function attendance_legal_entities_outside_shifts_time()
	{
		return $this->belongsTo(AttendanceLegalEntitiesOutsideShiftsTime::class);
	}

	public function attendance_standby_overtime()
	{
		return $this->belongsTo(AttendanceStandbyOvertime::class, 'attendance_standby_overtimes_id');
	}

	public function attendance_legal_entities_abscence()
	{
		return $this->belongsTo(AttendanceLegalEntitiesAbscence::class, 'attendance_legal_entities_abscences_id');
	}

	public function attendance_shift_break()
	{
		return $this->belongsTo(AttendanceShiftBreak::class, 'attendance_shift_breaks_id');
	}
}
