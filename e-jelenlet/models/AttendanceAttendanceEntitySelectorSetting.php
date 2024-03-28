<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceAttendanceEntitySelectorSetting
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $column_settings
 * @property string $column_settings_label
 * @property string $column_settings_class
 * @property string $column_settings_hide
 *
 * @package App\Models
 */
class AttendanceAttendanceEntitySelectorSetting extends Model
{
	protected $table = 'attendance_attendance_entity_selector_settings';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'column_settings',
		'column_settings_label',
		'column_settings_class',
		'column_settings_hide'
	];
}
