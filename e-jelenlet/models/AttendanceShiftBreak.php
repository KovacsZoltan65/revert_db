<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceShiftBreak
 * 
 * @property int $id
 * @property int $attendance_shift_types_id
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property int $is_bonused
 * @property int $length
 * 
 * @property AttendanceShiftType $attendance_shift_type
 * @property Collection|AttendanceWorkdayDivision[] $attendance_workday_divisions
 *
 * @package App\Models
 */
class AttendanceShiftBreak extends Model
{
	protected $table = 'attendance_shift_breaks';
	public $timestamps = false;

	protected $casts = [
		'attendance_shift_types_id' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'is_bonused' => 'int',
		'length' => 'int'
	];

	protected $fillable = [
		'attendance_shift_types_id',
		'start_time',
		'end_time',
		'is_bonused',
		'length'
	];

	public function attendance_shift_type()
	{
		return $this->belongsTo(AttendanceShiftType::class, 'attendance_shift_types_id');
	}

	public function attendance_workday_divisions()
	{
		return $this->hasMany(AttendanceWorkdayDivision::class, 'attendance_shift_breaks_id');
	}
}
