<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceAccessControlSystemsExtraAddress
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $email
 * 
 * @property CoreFirm $core_firm
 *
 * @package App\Models
 */
class AttendanceAccessControlSystemsExtraAddress extends Model
{
	protected $table = 'attendance_access_control_systems_extra_addresses';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'email'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}
}
