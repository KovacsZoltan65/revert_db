<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLegalEntitiesCoreActivitiesAssignment
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $core_activity_id
 * @property Carbon $start_date
 * @property Carbon|null $end_date
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreActivity $core_activity
 *
 * @package App\Models
 */
class CoreLegalEntitiesCoreActivitiesAssignment extends Model
{
	protected $table = 'core_legal_entities_core_activities_assignments';
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'core_activity_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'core_activity_id',
		'start_date',
		'end_date'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function core_activity()
	{
		return $this->belongsTo(CoreActivity::class);
	}
}
