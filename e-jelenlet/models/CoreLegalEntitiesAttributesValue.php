<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLegalEntitiesAttributesValue
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $core_legal_entities_attributes_id
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreLegalEntitiesAttribute $core_legal_entities_attribute
 *
 * @package App\Models
 */
class CoreLegalEntitiesAttributesValue extends Model
{
	protected $table = 'core_legal_entities_attributes_values';

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'core_legal_entities_attributes_id' => 'int'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'core_legal_entities_attributes_id',
		'value'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function core_legal_entities_attribute()
	{
		return $this->belongsTo(CoreLegalEntitiesAttribute::class, 'core_legal_entities_attributes_id');
	}
}
