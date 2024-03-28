<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreParametersCoreFirmsValue
 * 
 * @property int $id
 * @property int $core_parameters_id
 * @property int $core_firms_id
 * @property string $value
 * 
 * @property CoreParameter $core_parameter
 * @property CoreFirm $core_firm
 *
 * @package App\Models
 */
class CoreParametersCoreFirmsValue extends Model
{
	protected $table = 'core_parameters_core_firms_values';
	public $timestamps = false;

	protected $casts = [
		'core_parameters_id' => 'int',
		'core_firms_id' => 'int'
	];

	protected $fillable = [
		'core_parameters_id',
		'core_firms_id',
		'value'
	];

	public function core_parameter()
	{
		return $this->belongsTo(CoreParameter::class, 'core_parameters_id');
	}

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}
}
