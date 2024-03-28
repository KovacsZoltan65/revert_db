<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreParameterValue
 * 
 * @property int $id
 * @property string $value
 * @property int $status
 * @property int $_order
 * 
 * @property Collection|CoreParameter[] $core_parameters
 *
 * @package App\Models
 */
class CoreParameterValue extends Model
{
	protected $table = 'core_parameter_values';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'_order' => 'int'
	];

	protected $fillable = [
		'value',
		'status',
		'_order'
	];

	public function core_parameters()
	{
		return $this->belongsToMany(CoreParameter::class, 'core_parameters_core_parameter_values_rel', 'core_parameter_values_id', 'core_parameters_id')
					->withPivot('id');
	}
}
