<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceWorkplansCoreLegalEntitiesRel
 * 
 * @property int $id
 * @property int $attendance_workplans_id
 * @property int $core_legal_entities_id
 * @property Carbon|null $start_date
 * @property Carbon|null $end_date
 * 
 * @property AttendanceWorkplan $attendance_workplan
 * @property CoreLegalEntity $core_legal_entity
 *
 * @package App\Models
 */
class AttendanceWorkplansCoreLegalEntitiesRel extends Model
{
	protected $table = 'attendance_workplans_core_legal_entities_rel';
	public $timestamps = false;

	protected $casts = [
		'attendance_workplans_id' => 'int',
		'core_legal_entities_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'attendance_workplans_id',
		'core_legal_entities_id',
		'start_date',
		'end_date'
	];

	public function attendance_workplan()
	{
		return $this->belongsTo(AttendanceWorkplan::class, 'attendance_workplans_id');
	}

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}
}
