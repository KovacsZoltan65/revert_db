<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreParametersCoreFirmsStatus
 * 
 * @property int $id
 * @property int $core_parameters_id
 * @property int $core_firms_id
 * @property int $status
 * 
 * @property CoreParameter $core_parameter
 * @property CoreFirm $core_firm
 *
 * @package App\Models
 */
class CoreParametersCoreFirmsStatus extends Model
{
	protected $table = 'core_parameters_core_firms_status';
	public $timestamps = false;

	protected $casts = [
		'core_parameters_id' => 'int',
		'core_firms_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'core_parameters_id',
		'core_firms_id',
		'status'
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
