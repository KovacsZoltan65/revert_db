<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreModule
 * 
 * @property int $id
 * @property int|null $core_components_id
 * @property string $directory
 * 
 * @property CoreComponent|null $core_component
 * @property Collection|CoreAction[] $core_actions
 * @property Collection|CoreFirm[] $core_firms
 * @property Collection|CoreLog[] $core_logs
 * @property Collection|CoreMenuItem[] $core_menu_items
 * @property Collection|CoreParameter[] $core_parameters
 *
 * @package App\Models
 */
class CoreModule extends Model
{
	protected $table = 'core_modules';
	public $timestamps = false;

	protected $casts = [
		'core_components_id' => 'int'
	];

	protected $fillable = [
		'core_components_id',
		'directory'
	];

	public function core_component()
	{
		return $this->belongsTo(CoreComponent::class, 'core_components_id');
	}

	public function core_actions()
	{
		return $this->hasMany(CoreAction::class, 'core_modules_id');
	}

	public function core_firms()
	{
		return $this->belongsToMany(CoreFirm::class, 'core_extra_permission_core_modules_core_firms_rel', 'core_modules_id', 'core_firms_id')
					->withPivot('id', 'usable', 'name');
	}

	public function core_logs()
	{
		return $this->hasMany(CoreLog::class, 'core_modules_id');
	}

	public function core_menu_items()
	{
		return $this->hasMany(CoreMenuItem::class, 'core_modules_id');
	}

	public function core_parameters()
	{
		return $this->hasMany(CoreParameter::class, 'core_modules_id');
	}
}
