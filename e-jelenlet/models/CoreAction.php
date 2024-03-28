<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreAction
 * 
 * @property int $id
 * @property int|null $core_menu_items_id
 * @property int|null $core_modules_id
 * @property string $name
 * @property bool $is_api
 * @property string|null $description
 * @property int $is_visible
 * @property int|null $default_permission_level
 * @property int $action_without_menu
 * 
 * @property CoreMenuItem|null $core_menu_item
 * @property CoreModule|null $core_module
 * @property Collection|CoreLog[] $core_logs
 * @property Collection|CorePermissionGroupsActionPermissionsRel[] $core_permission_groups_action_permissions_rels
 * @property Collection|CoreSpecialPermission[] $core_special_permissions
 *
 * @package App\Models
 */
class CoreAction extends Model
{
	protected $table = 'core_actions';
	public $timestamps = false;

	protected $casts = [
		'core_menu_items_id' => 'int',
		'core_modules_id' => 'int',
		'is_api' => 'bool',
		'is_visible' => 'int',
		'default_permission_level' => 'int',
		'action_without_menu' => 'int'
	];

	protected $fillable = [
		'core_menu_items_id',
		'core_modules_id',
		'name',
		'is_api',
		'description',
		'is_visible',
		'default_permission_level',
		'action_without_menu'
	];

	public function core_menu_item()
	{
		return $this->belongsTo(CoreMenuItem::class, 'core_menu_items_id');
	}

	public function core_module()
	{
		return $this->belongsTo(CoreModule::class, 'core_modules_id');
	}

	public function core_logs()
	{
		return $this->hasMany(CoreLog::class, 'core_actions_id');
	}

	public function core_permission_groups_action_permissions_rels()
	{
		return $this->hasMany(CorePermissionGroupsActionPermissionsRel::class, 'core_actions_id');
	}

	public function core_special_permissions()
	{
		return $this->belongsToMany(CoreSpecialPermission::class, 'core_special_permissions_core_actions_rel', 'core_actions_id', 'core_special_permissions_id')
					->withPivot('id');
	}
}
