<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceWorkplanCategory
 * 
 * @property int $id
 * 
 * @property Collection|AttendanceWorkplan[] $attendance_workplans
 *
 * @package App\Models
 */
class AttendanceWorkplanCategory extends Model
{
	protected $table = 'attendance_workplan_categories';
	public $timestamps = false;

	public function attendance_workplans()
	{
		return $this->hasMany(AttendanceWorkplan::class, 'attendance_workplan_categories_id');
	}
}
