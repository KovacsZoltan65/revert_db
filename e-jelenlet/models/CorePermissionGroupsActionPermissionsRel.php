<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CorePermissionGroupsActionPermissionsRel
 * 
 * @property int $id
 * @property int $core_permission_groups_id
 * @property int $core_actions_id
 * 
 * @property CorePermissionGroup $core_permission_group
 * @property CoreAction $core_action
 *
 * @package App\Models
 */
class CorePermissionGroupsActionPermissionsRel extends Model
{
	protected $table = 'core_permission_groups_action_permissions_rel';
	public $timestamps = false;

	protected $casts = [
		'core_permission_groups_id' => 'int',
		'core_actions_id' => 'int'
	];

	protected $fillable = [
		'core_permission_groups_id',
		'core_actions_id'
	];

	public function core_permission_group()
	{
		return $this->belongsTo(CorePermissionGroup::class, 'core_permission_groups_id');
	}

	public function core_action()
	{
		return $this->belongsTo(CoreAction::class, 'core_actions_id');
	}
}
