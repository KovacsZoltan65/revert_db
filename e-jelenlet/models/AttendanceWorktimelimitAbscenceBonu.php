<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceWorktimelimitAbscenceBonu
 * 
 * @property int $id
 * @property int $attendance_worktimelimits_id
 * @property int $attendance_bonus_types_id
 * 
 * @property AttendanceWorktimelimit $attendance_worktimelimit
 * @property AttendanceBonusType $attendance_bonus_type
 *
 * @package App\Models
 */
class AttendanceWorktimelimitAbscenceBonu extends Model
{
	protected $table = 'attendance_worktimelimit_abscence_bonus';
	public $timestamps = false;

	protected $casts = [
		'attendance_worktimelimits_id' => 'int',
		'attendance_bonus_types_id' => 'int'
	];

	protected $fillable = [
		'attendance_worktimelimits_id',
		'attendance_bonus_types_id'
	];

	public function attendance_worktimelimit()
	{
		return $this->belongsTo(AttendanceWorktimelimit::class, 'attendance_worktimelimits_id');
	}

	public function attendance_bonus_type()
	{
		return $this->belongsTo(AttendanceBonusType::class, 'attendance_bonus_types_id');
	}
}
