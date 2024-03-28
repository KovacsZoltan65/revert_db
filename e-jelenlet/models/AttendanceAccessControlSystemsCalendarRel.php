<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceAccessControlSystemsCalendarRel
 * 
 * @property int $id
 * @property int $calendar_id
 * @property Carbon|null $start_time
 * @property Carbon|null $end_time
 * @property int $processed_status
 * @property array|null $error_message
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property AttendanceLegalEntitiesCalendar $attendance_legal_entities_calendar
 *
 * @package App\Models
 */
class AttendanceAccessControlSystemsCalendarRel extends Model
{
	protected $table = 'attendance_access_control_systems_calendar_rel';

	protected $casts = [
		'calendar_id' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'processed_status' => 'int',
		'error_message' => 'json'
	];

	protected $fillable = [
		'calendar_id',
		'start_time',
		'end_time',
		'processed_status',
		'error_message'
	];

	public function attendance_legal_entities_calendar()
	{
		return $this->belongsTo(AttendanceLegalEntitiesCalendar::class, 'calendar_id');
	}
}
