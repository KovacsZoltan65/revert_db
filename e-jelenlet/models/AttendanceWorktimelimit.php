<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceWorktimelimit
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $name
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property string $daily_workhours
 * 
 * @property CoreFirm $core_firm
 * @property Collection|AttendanceWorktimelimitAbscenceBonu[] $attendance_worktimelimit_abscence_bonus
 * @property Collection|AttendanceWorktimelimitAbscence[] $attendance_worktimelimit_abscences
 * @property Collection|AttendanceWorktimelimitAssignment[] $attendance_worktimelimit_assignments
 * @property Collection|AttendanceWorktimelimitDeficit[] $attendance_worktimelimit_deficits
 * @property Collection|AttendanceWorktimelimitExcess[] $attendance_worktimelimit_excesses
 * @property Collection|AttendanceWorktimelimitRestTimeDifferenceBonu[] $attendance_worktimelimit_rest_time_difference_bonus
 *
 * @package App\Models
 */
class AttendanceWorktimelimit extends Model
{
	protected $table = 'attendance_worktimelimits';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'core_firms_id',
		'name',
		'start_date',
		'end_date',
		'daily_workhours'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function attendance_worktimelimit_abscence_bonus()
	{
		return $this->hasMany(AttendanceWorktimelimitAbscenceBonu::class, 'attendance_worktimelimits_id');
	}

	public function attendance_worktimelimit_abscences()
	{
		return $this->hasMany(AttendanceWorktimelimitAbscence::class, 'attendance_worktimelimits_id');
	}

	public function attendance_worktimelimit_assignments()
	{
		return $this->hasMany(AttendanceWorktimelimitAssignment::class, 'attendance_worktimelimits_id');
	}

	public function attendance_worktimelimit_deficits()
	{
		return $this->hasMany(AttendanceWorktimelimitDeficit::class, 'attendance_worktimelimits_id');
	}

	public function attendance_worktimelimit_excesses()
	{
		return $this->hasMany(AttendanceWorktimelimitExcess::class, 'attendance_worktimelimits_id');
	}

	public function attendance_worktimelimit_rest_time_difference_bonus()
	{
		return $this->hasMany(AttendanceWorktimelimitRestTimeDifferenceBonu::class, 'attendance_worktimelimits_id');
	}
}
