<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesShiftsWorkhour
 * 
 * @property int $id
 * @property int|null $registered_calendar_id
 * @property int|null $payroll_calendar_id
 * @property int|null $attendance_legal_entities_shifts_id
 * @property Carbon $start_time
 * @property Carbon $end_time
 * 
 * @property AttendanceLegalEntitiesCalendar|null $attendance_legal_entities_calendar
 * @property AttendanceLegalEntitiesShift|null $attendance_legal_entities_shift
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesShiftsWorkhour extends Model
{
	protected $table = 'attendance_legal_entities_shifts_workhours';
	public $timestamps = false;

	protected $casts = [
		'registered_calendar_id' => 'int',
		'payroll_calendar_id' => 'int',
		'attendance_legal_entities_shifts_id' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime'
	];

	protected $fillable = [
		'registered_calendar_id',
		'payroll_calendar_id',
		'attendance_legal_entities_shifts_id',
		'start_time',
		'end_time'
	];

	public function attendance_legal_entities_calendar()
	{
		return $this->belongsTo(AttendanceLegalEntitiesCalendar::class, 'payroll_calendar_id');
	}

	public function attendance_legal_entities_shift()
	{
		return $this->belongsTo(AttendanceLegalEntitiesShift::class, 'attendance_legal_entities_shifts_id');
	}
}
