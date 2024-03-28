<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CorePermissionGroup
 * 
 * @property int $id
 * @property string $name
 * @property int $group_type
 * @property int|null $core_firms_id
 * @property bool $active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreFirm|null $core_firm
 * @property Collection|CorePermissionGroupsActionPermissionsRel[] $core_permission_groups_action_permissions_rels
 * @property Collection|CorePermissionGroupsCoreLegalEntitiesRel[] $core_permission_groups_core_legal_entities_rels
 * @property Collection|CoreSpecialPermission[] $core_special_permissions
 *
 * @package App\Models
 */
class CorePermissionGroup extends Model
{
	protected $table = 'core_permission_groups';

	protected $casts = [
		'group_type' => 'int',
		'core_firms_id' => 'int',
		'active' => 'bool'
	];

	protected $fillable = [
		'name',
		'group_type',
		'core_firms_id',
		'active'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_permission_groups_action_permissions_rels()
	{
		return $this->hasMany(CorePermissionGroupsActionPermissionsRel::class, 'core_permission_groups_id');
	}

	public function core_permission_groups_core_legal_entities_rels()
	{
		return $this->hasMany(CorePermissionGroupsCoreLegalEntitiesRel::class, 'core_permission_groups_id');
	}

	public function core_special_permissions()
	{
		return $this->hasMany(CoreSpecialPermission::class, 'target_permission_group_id');
	}
}
