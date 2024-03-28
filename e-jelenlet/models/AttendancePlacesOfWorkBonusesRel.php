<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendancePlacesOfWorkBonusesRel
 * 
 * @property int $id
 * @property int $attendance_places_of_work_id
 * @property int $attendance_bonus_types_id
 * 
 * @property AttendancePlacesOfWork $attendance_places_of_work
 * @property AttendanceBonusType $attendance_bonus_type
 *
 * @package App\Models
 */
class AttendancePlacesOfWorkBonusesRel extends Model
{
	protected $table = 'attendance_places_of_work_bonuses_rel';
	public $timestamps = false;

	protected $casts = [
		'attendance_places_of_work_id' => 'int',
		'attendance_bonus_types_id' => 'int'
	];

	protected $fillable = [
		'attendance_places_of_work_id',
		'attendance_bonus_types_id'
	];

	public function attendance_places_of_work()
	{
		return $this->belongsTo(AttendancePlacesOfWork::class);
	}

	public function attendance_bonus_type()
	{
		return $this->belongsTo(AttendanceBonusType::class, 'attendance_bonus_types_id');
	}
}
