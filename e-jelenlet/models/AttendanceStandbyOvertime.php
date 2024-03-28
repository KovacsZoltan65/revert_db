<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceStandbyOvertime
 * 
 * @property int $id
 * @property int $attendance_legal_entities_outside_shifts_time_id
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property int $work_by_traveling
 * @property string $note
 * 
 * @property AttendanceLegalEntitiesOutsideShiftsTime $attendance_legal_entities_outside_shifts_time
 * @property Collection|AttendanceWorkdayDivision[] $attendance_workday_divisions
 *
 * @package App\Models
 */
class AttendanceStandbyOvertime extends Model
{
	protected $table = 'attendance_standby_overtimes';
	public $timestamps = false;

	protected $casts = [
		'attendance_legal_entities_outside_shifts_time_id' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'work_by_traveling' => 'int'
	];

	protected $fillable = [
		'attendance_legal_entities_outside_shifts_time_id',
		'start_time',
		'end_time',
		'work_by_traveling',
		'note'
	];

	public function attendance_legal_entities_outside_shifts_time()
	{
		return $this->belongsTo(AttendanceLegalEntitiesOutsideShiftsTime::class);
	}

	public function attendance_workday_divisions()
	{
		return $this->hasMany(AttendanceWorkdayDivision::class, 'attendance_standby_overtimes_id');
	}
}
