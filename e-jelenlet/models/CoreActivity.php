<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreActivity
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $type
 * 
 * @property CoreFirm $core_firm
 * @property Collection|CoreLegalEntitiesCoreActivitiesAssignment[] $core_legal_entities_core_activities_assignments
 *
 * @package App\Models
 */
class CoreActivity extends Model
{
	protected $table = 'core_activities';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'type'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_legal_entities_core_activities_assignments()
	{
		return $this->hasMany(CoreLegalEntitiesCoreActivitiesAssignment::class);
	}
}
