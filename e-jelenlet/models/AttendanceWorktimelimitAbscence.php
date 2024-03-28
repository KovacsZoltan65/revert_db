<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceWorktimelimitAbscence
 * 
 * @property int $id
 * @property int $attendance_worktimelimits_id
 * @property int $abscence_types_id
 * 
 * @property AttendanceWorktimelimit $attendance_worktimelimit
 * @property AttendanceAbscenceTypesCoreFirmsRel $attendance_abscence_types_core_firms_rel
 *
 * @package App\Models
 */
class AttendanceWorktimelimitAbscence extends Model
{
	protected $table = 'attendance_worktimelimit_abscences';
	public $timestamps = false;

	protected $casts = [
		'attendance_worktimelimits_id' => 'int',
		'abscence_types_id' => 'int'
	];

	protected $fillable = [
		'attendance_worktimelimits_id',
		'abscence_types_id'
	];

	public function attendance_worktimelimit()
	{
		return $this->belongsTo(AttendanceWorktimelimit::class, 'attendance_worktimelimits_id');
	}

	public function attendance_abscence_types_core_firms_rel()
	{
		return $this->belongsTo(AttendanceAbscenceTypesCoreFirmsRel::class, 'abscence_types_id', 'attendance_abscence_types_id');
	}
}
