<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreExtendedHierarchy
 * 
 * @property int $id
 * @property int $parent_core_legal_entities_id
 * @property int $child_core_legal_entities_id
 * @property int $core_firms_id
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreFirm $core_firm
 *
 * @package App\Models
 */
class CoreExtendedHierarchy extends Model
{
	protected $table = 'core_extended_hierarchy';
	public $timestamps = false;

	protected $casts = [
		'parent_core_legal_entities_id' => 'int',
		'child_core_legal_entities_id' => 'int',
		'core_firms_id' => 'int'
	];

	protected $fillable = [
		'parent_core_legal_entities_id',
		'child_core_legal_entities_id',
		'core_firms_id'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'child_core_legal_entities_id');
	}

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}
}
