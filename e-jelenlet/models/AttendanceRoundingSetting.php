<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceRoundingSetting
 * 
 * @property int $id
 * @property int $rounding_id
 * @property int $core_firms_id
 * @property int $prevalence
 * @property int $rate
 * @property int $accuracy
 * @property int $rule
 * @property int $type
 * @property int $display
 * 
 * @property CoreFirm $core_firm
 *
 * @package App\Models
 */
class AttendanceRoundingSetting extends Model
{
	protected $table = 'attendance_rounding_settings';
	public $timestamps = false;

	protected $casts = [
		'rounding_id' => 'int',
		'core_firms_id' => 'int',
		'prevalence' => 'int',
		'rate' => 'int',
		'accuracy' => 'int',
		'rule' => 'int',
		'type' => 'int',
		'display' => 'int'
	];

	protected $fillable = [
		'rounding_id',
		'core_firms_id',
		'prevalence',
		'rate',
		'accuracy',
		'rule',
		'type',
		'display'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}
}
