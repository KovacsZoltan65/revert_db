<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreSavedLegalEntityFilter
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property string $name
 * @property string $filter_data
 * 
 * @property CoreLegalEntity $core_legal_entity
 *
 * @package App\Models
 */
class CoreSavedLegalEntityFilter extends Model
{
	protected $table = 'core_saved_legal_entity_filters';
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_id' => 'int'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'name',
		'filter_data'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}
}
