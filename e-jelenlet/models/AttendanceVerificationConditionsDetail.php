<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceVerificationConditionsDetail
 * 
 * @property int $id
 * @property int $attendance_verification_conditions_id
 * @property int $core_localization_id
 * @property string $title
 * @property string $error_message
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property AttendanceVerificationCondition $attendance_verification_condition
 *
 * @package App\Models
 */
class AttendanceVerificationConditionsDetail extends Model
{
	protected $table = 'attendance_verification_conditions_details';

	protected $casts = [
		'attendance_verification_conditions_id' => 'int',
		'core_localization_id' => 'int'
	];

	protected $fillable = [
		'attendance_verification_conditions_id',
		'core_localization_id',
		'title',
		'error_message'
	];

	public function attendance_verification_condition()
	{
		return $this->belongsTo(AttendanceVerificationCondition::class, 'attendance_verification_conditions_id');
	}
}
