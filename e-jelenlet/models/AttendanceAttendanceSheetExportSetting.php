<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceAttendanceSheetExportSetting
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $header_settings
 * @property string $body_settings
 * @property string $footer_settings
 * 
 * @property CoreFirm $core_firm
 *
 * @package App\Models
 */
class AttendanceAttendanceSheetExportSetting extends Model
{
	protected $table = 'attendance_attendance_sheet_export_settings';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'header_settings',
		'body_settings',
		'footer_settings'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}
}
