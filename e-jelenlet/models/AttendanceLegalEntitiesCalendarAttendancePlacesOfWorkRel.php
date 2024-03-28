<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesCalendarAttendancePlacesOfWorkRel
 * 
 * @property int $id
 * @property int|null $attendance_legal_entities_calendar_id
 * @property int|null $attendance_places_of_work_id
 * 
 * @property AttendanceLegalEntitiesCalendar|null $attendance_legal_entities_calendar
 * @property AttendancePlacesOfWork|null $attendance_places_of_work
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesCalendarAttendancePlacesOfWorkRel extends Model
{
	protected $table = 'attendance_legal_entities_calendar_attendance_places_of_work_rel';
	public $timestamps = false;

	protected $casts = [
		'attendance_legal_entities_calendar_id' => 'int',
		'attendance_places_of_work_id' => 'int'
	];

	protected $fillable = [
		'attendance_legal_entities_calendar_id',
		'attendance_places_of_work_id'
	];

	public function attendance_legal_entities_calendar()
	{
		return $this->belongsTo(AttendanceLegalEntitiesCalendar::class);
	}

	public function attendance_places_of_work()
	{
		return $this->belongsTo(AttendancePlacesOfWork::class);
	}
}
