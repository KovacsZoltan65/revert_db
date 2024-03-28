<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreSpecialPermission
 * 
 * @property int $id
 * @property string $name
 * @property int $core_firms_id
 * @property int $source_permission_group_id
 * @property int $target_permission_group_id
 * 
 * @property CoreFirm $core_firm
 * @property CorePermissionGroup $core_permission_group
 * @property Collection|CoreAction[] $core_actions
 *
 * @package App\Models
 */
class CoreSpecialPermission extends Model
{
	protected $table = 'core_special_permissions';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'source_permission_group_id' => 'int',
		'target_permission_group_id' => 'int'
	];

	protected $fillable = [
		'name',
		'core_firms_id',
		'source_permission_group_id',
		'target_permission_group_id'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_permission_group()
	{
		return $this->belongsTo(CorePermissionGroup::class, 'target_permission_group_id');
	}

	public function core_actions()
	{
		return $this->belongsToMany(CoreAction::class, 'core_special_permissions_core_actions_rel', 'core_special_permissions_id', 'core_actions_id')
					->withPivot('id');
	}
}
