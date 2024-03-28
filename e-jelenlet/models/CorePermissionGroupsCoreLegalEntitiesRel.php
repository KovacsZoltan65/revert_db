<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CorePermissionGroupsCoreLegalEntitiesRel
 * 
 * @property int $id
 * @property int $core_permission_groups_id
 * @property int $core_legal_entities_id
 * 
 * @property CorePermissionGroup $core_permission_group
 * @property CoreLegalEntity $core_legal_entity
 *
 * @package App\Models
 */
class CorePermissionGroupsCoreLegalEntitiesRel extends Model
{
	protected $table = 'core_permission_groups_core_legal_entities_rel';
	public $timestamps = false;

	protected $casts = [
		'core_permission_groups_id' => 'int',
		'core_legal_entities_id' => 'int'
	];

	protected $fillable = [
		'core_permission_groups_id',
		'core_legal_entities_id'
	];

	public function core_permission_group()
	{
		return $this->belongsTo(CorePermissionGroup::class, 'core_permission_groups_id');
	}

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}
}
