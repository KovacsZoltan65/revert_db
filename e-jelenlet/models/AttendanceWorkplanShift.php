<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceWorkplanShift
 * 
 * @property int $id
 * @property int $attendance_workplans_id
 * @property int $attendance_day_types_id
 * @property int|null $attendance_shift_types_id
 * @property Carbon $_date
 * 
 * @property AttendanceWorkplan $attendance_workplan
 * @property AttendanceDayType $attendance_day_type
 * @property AttendanceShiftType|null $attendance_shift_type
 *
 * @package App\Models
 */
class AttendanceWorkplanShift extends Model
{
	protected $table = 'attendance_workplan_shifts';
	public $timestamps = false;

	protected $casts = [
		'attendance_workplans_id' => 'int',
		'attendance_day_types_id' => 'int',
		'attendance_shift_types_id' => 'int',
		'_date' => 'datetime'
	];

	protected $fillable = [
		'attendance_workplans_id',
		'attendance_day_types_id',
		'attendance_shift_types_id',
		'_date'
	];

	public function attendance_workplan()
	{
		return $this->belongsTo(AttendanceWorkplan::class, 'attendance_workplans_id');
	}

	public function attendance_day_type()
	{
		return $this->belongsTo(AttendanceDayType::class, 'attendance_day_types_id');
	}

	public function attendance_shift_type()
	{
		return $this->belongsTo(AttendanceShiftType::class, 'attendance_shift_types_id');
	}
}
