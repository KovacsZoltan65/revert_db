<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceAccessControlSystem
 * 
 * @property int $id
 * @property string $name
 * 
 * @property Collection|AttendanceWorkplan[] $attendance_workplans
 *
 * @package App\Models
 */
class AttendanceAccessControlSystem extends Model
{
	protected $table = 'attendance_access_control_systems';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function attendance_workplans()
	{
		return $this->hasMany(AttendanceWorkplan::class, 'attendance_access_control_systems_id');
	}
}
