<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceStandbyType
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $code
 * @property string $name
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property int $travel_time
 * @property int $status
 * @property int $editable
 * 
 * @property CoreFirm $core_firm
 * @property Collection|AttendanceLegalEntitiesOutsideShiftsTime[] $attendance_legal_entities_outside_shifts_times
 *
 * @package App\Models
 */
class AttendanceStandbyType extends Model
{
	protected $table = 'attendance_standby_types';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'travel_time' => 'int',
		'status' => 'int',
		'editable' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'code',
		'name',
		'start_time',
		'end_time',
		'travel_time',
		'status',
		'editable'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function attendance_legal_entities_outside_shifts_times()
	{
		return $this->hasMany(AttendanceLegalEntitiesOutsideShiftsTime::class, 'attendance_standby_types_id');
	}
}
