<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceShiftType
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $payroll_software_id
 * @property string $code
 * @property string $name
 * @property Carbon $trunk_time_start
 * @property Carbon $trunk_time_end
 * @property Carbon $edge_time_start
 * @property Carbon $edge_time_end
 * @property Carbon|null $bonus1_time_start
 * @property Carbon|null $bonus1_time_end
 * @property Carbon|null $bonus2_time_start
 * @property Carbon|null $bonus2_time_end
 * @property int|null $breaktime
 * @property Carbon|null $breaktime_start
 * @property Carbon|null $breaktime_end
 * @property string $trunk_attendance_bonuses
 * @property string $edge_attendance_bonuses
 * @property int $status
 * @property bool $editable
 * @property Carbon|null $sunday_bonus_time_start
 * @property Carbon|null $sunday_bonus_time_end
 * @property int|null $sunday_bonus_type_id
 * @property Carbon|null $holiday_bonus_time_start
 * @property Carbon|null $holiday_bonus_time_end
 * @property int|null $holiday_bonus_type_id
 * 
 * @property CoreFirm $core_firm
 * @property AttendanceBonusType|null $attendance_bonus_type
 * @property Collection|AttendanceLegalEntitiesShift[] $attendance_legal_entities_shifts
 * @property Collection|AttendanceShiftBreak[] $attendance_shift_breaks
 * @property Collection|AttendanceWorkplanShift[] $attendance_workplan_shifts
 *
 * @package App\Models
 */
class AttendanceShiftType extends Model
{
	protected $table = 'attendance_shift_types';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'trunk_time_start' => 'datetime',
		'trunk_time_end' => 'datetime',
		'edge_time_start' => 'datetime',
		'edge_time_end' => 'datetime',
		'bonus1_time_start' => 'datetime',
		'bonus1_time_end' => 'datetime',
		'bonus2_time_start' => 'datetime',
		'bonus2_time_end' => 'datetime',
		'breaktime' => 'int',
		'breaktime_start' => 'datetime',
		'breaktime_end' => 'datetime',
		'status' => 'int',
		'editable' => 'bool',
		'sunday_bonus_time_start' => 'datetime',
		'sunday_bonus_time_end' => 'datetime',
		'sunday_bonus_type_id' => 'int',
		'holiday_bonus_time_start' => 'datetime',
		'holiday_bonus_time_end' => 'datetime',
		'holiday_bonus_type_id' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'payroll_software_id',
		'code',
		'name',
		'trunk_time_start',
		'trunk_time_end',
		'edge_time_start',
		'edge_time_end',
		'bonus1_time_start',
		'bonus1_time_end',
		'bonus2_time_start',
		'bonus2_time_end',
		'breaktime',
		'breaktime_start',
		'breaktime_end',
		'trunk_attendance_bonuses',
		'edge_attendance_bonuses',
		'status',
		'editable',
		'sunday_bonus_time_start',
		'sunday_bonus_time_end',
		'sunday_bonus_type_id',
		'holiday_bonus_time_start',
		'holiday_bonus_time_end',
		'holiday_bonus_type_id'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function attendance_bonus_type()
	{
		return $this->belongsTo(AttendanceBonusType::class, 'holiday_bonus_type_id');
	}

	public function attendance_legal_entities_shifts()
	{
		return $this->hasMany(AttendanceLegalEntitiesShift::class, 'attendance_shift_types_id');
	}

	public function attendance_shift_breaks()
	{
		return $this->hasMany(AttendanceShiftBreak::class, 'attendance_shift_types_id');
	}

	public function attendance_workplan_shifts()
	{
		return $this->hasMany(AttendanceWorkplanShift::class, 'attendance_shift_types_id');
	}
}
