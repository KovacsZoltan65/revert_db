<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceDayType
 * 
 * @property int $id
 * 
 * @property Collection|AttendanceWorkplanShift[] $attendance_workplan_shifts
 *
 * @package App\Models
 */
class AttendanceDayType extends Model
{
	protected $table = 'attendance_day_types';
	public $timestamps = false;

	public function attendance_workplan_shifts()
	{
		return $this->hasMany(AttendanceWorkplanShift::class, 'attendance_day_types_id');
	}
}
