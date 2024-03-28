<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceWorkdayDivisionsOrder
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $divisions_id
 * @property int $status
 * 
 * @property CoreFirm $core_firm
 *
 * @package App\Models
 */
class AttendanceWorkdayDivisionsOrder extends Model
{
	protected $table = 'attendance_workday_divisions_order';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'divisions_id',
		'status'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}
}
