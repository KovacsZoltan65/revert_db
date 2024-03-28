<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendancePlacesOfWork
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $name
 * @property int $status
 * @property int $bonus_status
 * @property string|null $authorization
 * 
 * @property CoreFirm $core_firm
 * @property Collection|AttendanceLegalEntitiesCalendar[] $attendance_legal_entities_calendars
 * @property Collection|AttendancePlacesOfWorkBonusesRel[] $attendance_places_of_work_bonuses_rels
 *
 * @package App\Models
 */
class AttendancePlacesOfWork extends Model
{
	protected $table = 'attendance_places_of_work';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'status' => 'int',
		'bonus_status' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'name',
		'status',
		'bonus_status',
		'authorization'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function attendance_legal_entities_calendars()
	{
		return $this->belongsToMany(AttendanceLegalEntitiesCalendar::class, 'attendance_legal_entities_calendar_attendance_places_of_work_rel')
					->withPivot('id');
	}

	public function attendance_places_of_work_bonuses_rels()
	{
		return $this->hasMany(AttendancePlacesOfWorkBonusesRel::class);
	}
}
