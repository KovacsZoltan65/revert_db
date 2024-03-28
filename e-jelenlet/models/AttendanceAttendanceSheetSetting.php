<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceAttendanceSheetSetting
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $header_settings
 * @property string $body_settings
 * @property string|null $body_settings_name
 * @property string $footer_settings
 * @property string|null $footer_settings_name
 * 
 * @property CoreFirm $core_firm
 *
 * @package App\Models
 */
class AttendanceAttendanceSheetSetting extends Model
{
	protected $table = 'attendance_attendance_sheet_settings';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'header_settings',
		'body_settings',
		'body_settings_name',
		'footer_settings',
		'footer_settings_name'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}
}
