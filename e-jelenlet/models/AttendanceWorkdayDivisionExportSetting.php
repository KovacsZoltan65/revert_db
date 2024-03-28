<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceWorkdayDivisionExportSetting
 * 
 * @property int $id
 * @property string $name
 * @property string $identification
 * @property int $core_firms_id
 * @property string|null $factory_code
 * @property string|null $cost_center
 * @property string|null $jobnumber
 * @property bool $skip_incapable_of_work
 * @property array|null $core_general_ledger_analytics_ids
 * @property int $export_division_with_date
 * @property int $export_in_sum
 * @property int $time_format_number
 *
 * @package App\Models
 */
class AttendanceWorkdayDivisionExportSetting extends Model
{
	protected $table = 'attendance_workday_division_export_settings';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'skip_incapable_of_work' => 'bool',
		'core_general_ledger_analytics_ids' => 'json',
		'export_division_with_date' => 'int',
		'export_in_sum' => 'int',
		'time_format_number' => 'int'
	];

	protected $fillable = [
		'name',
		'identification',
		'core_firms_id',
		'factory_code',
		'cost_center',
		'jobnumber',
		'skip_incapable_of_work',
		'core_general_ledger_analytics_ids',
		'export_division_with_date',
		'export_in_sum',
		'time_format_number'
	];
}
