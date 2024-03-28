<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreSpecialPermissionsCoreActionsRel
 * 
 * @property int $id
 * @property int $core_special_permissions_id
 * @property int $core_actions_id
 * 
 * @property CoreSpecialPermission $core_special_permission
 * @property CoreAction $core_action
 *
 * @package App\Models
 */
class CoreSpecialPermissionsCoreActionsRel extends Model
{
	protected $table = 'core_special_permissions_core_actions_rel';
	public $timestamps = false;

	protected $casts = [
		'core_special_permissions_id' => 'int',
		'core_actions_id' => 'int'
	];

	protected $fillable = [
		'core_special_permissions_id',
		'core_actions_id'
	];

	public function core_special_permission()
	{
		return $this->belongsTo(CoreSpecialPermission::class, 'core_special_permissions_id');
	}

	public function core_action()
	{
		return $this->belongsTo(CoreAction::class, 'core_actions_id');
	}
}
