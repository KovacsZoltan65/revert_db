<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLegalEntitiesEstablishmentAssignment
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $core_establishments_id
 * @property Carbon $start_date
 * @property Carbon|null $end_date
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreEstablishment $core_establishment
 *
 * @package App\Models
 */
class CoreLegalEntitiesEstablishmentAssignment extends Model
{
	protected $table = 'core_legal_entities_establishment_assignments';
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'core_establishments_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'core_establishments_id',
		'start_date',
		'end_date'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function core_establishment()
	{
		return $this->belongsTo(CoreEstablishment::class, 'core_establishments_id');
	}
}
