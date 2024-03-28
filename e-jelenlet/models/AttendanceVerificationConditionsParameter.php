<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceVerificationConditionsParameter
 * 
 * @property int $id
 * @property int $core_localization_id
 * @property string $parameter
 * @property string $parameter_type
 * @property string $parameter_value
 *
 * @package App\Models
 */
class AttendanceVerificationConditionsParameter extends Model
{
	protected $table = 'attendance_verification_conditions_parameters';
	public $timestamps = false;

	protected $casts = [
		'core_localization_id' => 'int'
	];

	protected $fillable = [
		'core_localization_id',
		'parameter',
		'parameter_type',
		'parameter_value'
	];
}
