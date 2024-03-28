<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLegalEntitiesAttributesLabel
 * 
 * @property int $id
 * @property int $core_legal_entities_attributes_id
 * @property int $core_localization_id
 * @property string $value
 * 
 * @property CoreLegalEntitiesAttribute $core_legal_entities_attribute
 * @property CoreLocalization $core_localization
 *
 * @package App\Models
 */
class CoreLegalEntitiesAttributesLabel extends Model
{
	protected $table = 'core_legal_entities_attributes_labels';
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_attributes_id' => 'int',
		'core_localization_id' => 'int'
	];

	protected $fillable = [
		'core_legal_entities_attributes_id',
		'core_localization_id',
		'value'
	];

	public function core_legal_entities_attribute()
	{
		return $this->belongsTo(CoreLegalEntitiesAttribute::class, 'core_legal_entities_attributes_id');
	}

	public function core_localization()
	{
		return $this->belongsTo(CoreLocalization::class);
	}
}
