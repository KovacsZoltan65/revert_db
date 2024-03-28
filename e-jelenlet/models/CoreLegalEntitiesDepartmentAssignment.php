<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLegalEntitiesDepartmentAssignment
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $core_departments_id
 * @property Carbon $start_date
 * @property Carbon|null $end_date
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreDepartment $core_department
 *
 * @package App\Models
 */
class CoreLegalEntitiesDepartmentAssignment extends Model
{
	protected $table = 'core_legal_entities_department_assignments';
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'core_departments_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'core_departments_id',
		'start_date',
		'end_date'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function core_department()
	{
		return $this->belongsTo(CoreDepartment::class, 'core_departments_id');
	}
}
