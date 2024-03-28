<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreParameter
 * 
 * @property int $id
 * @property int $core_components_id
 * @property int|null $core_modules_id
 * @property int $type
 * @property int|null $minimum_value
 * @property int|null $maximum_value
 * @property string $default_value
 * @property int $status
 * @property int $_order
 * 
 * @property CoreComponent $core_component
 * @property CoreModule|null $core_module
 * @property Collection|CoreMenuItem[] $core_menu_items
 * @property Collection|CoreFirm[] $core_firms
 * @property Collection|CoreParametersCoreParameterValuesRel[] $core_parameters_core_parameter_values_rels
 *
 * @package App\Models
 */
class CoreParameter extends Model
{
	protected $table = 'core_parameters';
	public $timestamps = false;

	protected $casts = [
		'core_components_id' => 'int',
		'core_modules_id' => 'int',
		'type' => 'int',
		'minimum_value' => 'int',
		'maximum_value' => 'int',
		'status' => 'int',
		'_order' => 'int'
	];

	protected $fillable = [
		'core_components_id',
		'core_modules_id',
		'type',
		'minimum_value',
		'maximum_value',
		'default_value',
		'status',
		'_order'
	];

	public function core_component()
	{
		return $this->belongsTo(CoreComponent::class, 'core_components_id');
	}

	public function core_module()
	{
		return $this->belongsTo(CoreModule::class, 'core_modules_id');
	}

	public function core_menu_items()
	{
		return $this->hasMany(CoreMenuItem::class, 'core_parameters_id');
	}

	public function core_firms()
	{
		return $this->belongsToMany(CoreFirm::class, 'core_parameters_core_firms_values', 'core_parameters_id', 'core_firms_id')
					->withPivot('id', 'value');
	}

	public function core_parameters_core_parameter_values_rels()
	{
		return $this->hasMany(CoreParametersCoreParameterValuesRel::class, 'core_parameters_id');
	}
}
