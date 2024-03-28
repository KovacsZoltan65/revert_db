<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceWorktimelimitAssignment
 * 
 * @property int $id
 * @property int $attendance_worktimelimits_id
 * @property int $core_legal_entities_id
 * @property Carbon $start_date
 * @property Carbon $end_date
 * 
 * @property AttendanceWorktimelimit $attendance_worktimelimit
 * @property CoreLegalEntity $core_legal_entity
 *
 * @package App\Models
 */
class AttendanceWorktimelimitAssignment extends Model
{
	protected $table = 'attendance_worktimelimit_assignments';
	public $timestamps = false;

	protected $casts = [
		'attendance_worktimelimits_id' => 'int',
		'core_legal_entities_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'attendance_worktimelimits_id',
		'core_legal_entities_id',
		'start_date',
		'end_date'
	];

	public function attendance_worktimelimit()
	{
		return $this->belongsTo(AttendanceWorktimelimit::class, 'attendance_worktimelimits_id');
	}

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}
}
