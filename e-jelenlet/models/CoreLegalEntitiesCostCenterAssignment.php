<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLegalEntitiesCostCenterAssignment
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $core_cost_centers_id
 * @property Carbon $start_date
 * @property Carbon|null $end_date
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreCostCenter $core_cost_center
 *
 * @package App\Models
 */
class CoreLegalEntitiesCostCenterAssignment extends Model
{
	protected $table = 'core_legal_entities_cost_center_assignments';
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'core_cost_centers_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'core_cost_centers_id',
		'start_date',
		'end_date'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function core_cost_center()
	{
		return $this->belongsTo(CoreCostCenter::class, 'core_cost_centers_id');
	}
}
