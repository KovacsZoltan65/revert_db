<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreParametersCoreParameterValuesRel
 * 
 * @property int $id
 * @property int $core_parameters_id
 * @property int $core_parameter_values_id
 * 
 * @property CoreParameter $core_parameter
 * @property CoreParameterValue $core_parameter_value
 *
 * @package App\Models
 */
class CoreParametersCoreParameterValuesRel extends Model
{
	protected $table = 'core_parameters_core_parameter_values_rel';
	public $timestamps = false;

	protected $casts = [
		'core_parameters_id' => 'int',
		'core_parameter_values_id' => 'int'
	];

	protected $fillable = [
		'core_parameters_id',
		'core_parameter_values_id'
	];

	public function core_parameter()
	{
		return $this->belongsTo(CoreParameter::class, 'core_parameters_id');
	}

	public function core_parameter_value()
	{
		return $this->belongsTo(CoreParameterValue::class, 'core_parameter_values_id');
	}
}
