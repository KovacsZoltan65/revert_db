<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLegalEntitiesProfitCenterAssignment
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $core_profit_centers_id
 * @property Carbon $start_date
 * @property Carbon|null $end_date
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreProfitCenter $core_profit_center
 *
 * @package App\Models
 */
class CoreLegalEntitiesProfitCenterAssignment extends Model
{
	protected $table = 'core_legal_entities_profit_center_assignments';
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'core_profit_centers_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'core_profit_centers_id',
		'start_date',
		'end_date'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function core_profit_center()
	{
		return $this->belongsTo(CoreProfitCenter::class, 'core_profit_centers_id');
	}
}
