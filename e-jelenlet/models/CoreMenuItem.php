<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreMenuItem
 * 
 * @property int $id
 * @property int|null $core_modules_id
 * @property string $route
 * @property int $parent
 * @property int $_order
 * @property int|null $core_parameters_id
 * @property string $core_parameters_value
 * @property int $visible_for_outsourced_admin
 * @property int $visible_for_substitution
 * 
 * @property CoreModule|null $core_module
 * @property CoreParameter|null $core_parameter
 * @property Collection|CoreAction[] $core_actions
 *
 * @package App\Models
 */
class CoreMenuItem extends Model
{
	protected $table = 'core_menu_items';
	public $timestamps = false;

	protected $casts = [
		'core_modules_id' => 'int',
		'parent' => 'int',
		'_order' => 'int',
		'core_parameters_id' => 'int',
		'visible_for_outsourced_admin' => 'int',
		'visible_for_substitution' => 'int'
	];

	protected $fillable = [
		'core_modules_id',
		'route',
		'parent',
		'_order',
		'core_parameters_id',
		'core_parameters_value',
		'visible_for_outsourced_admin',
		'visible_for_substitution'
	];

	public function core_module()
	{
		return $this->belongsTo(CoreModule::class, 'core_modules_id');
	}

	public function core_parameter()
	{
		return $this->belongsTo(CoreParameter::class, 'core_parameters_id');
	}

	public function core_actions()
	{
		return $this->hasMany(CoreAction::class, 'core_menu_items_id');
	}
}
