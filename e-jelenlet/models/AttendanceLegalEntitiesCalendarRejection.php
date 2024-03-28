<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesCalendarRejection
 * 
 * @property int $id
 * @property int|null $attendance_legal_entities_calendar_id
 * @property int|null $core_legal_entities_id
 * @property string $note
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property AttendanceLegalEntitiesCalendar|null $attendance_legal_entities_calendar
 * @property CoreLegalEntity|null $core_legal_entity
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesCalendarRejection extends Model
{
	protected $table = 'attendance_legal_entities_calendar_rejections';

	protected $casts = [
		'attendance_legal_entities_calendar_id' => 'int',
		'core_legal_entities_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'attendance_legal_entities_calendar_id',
		'core_legal_entities_id',
		'note',
		'status'
	];

	public function attendance_legal_entities_calendar()
	{
		return $this->belongsTo(AttendanceLegalEntitiesCalendar::class);
	}

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}
}
