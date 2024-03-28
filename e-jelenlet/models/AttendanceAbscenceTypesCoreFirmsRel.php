<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceAbscenceTypesCoreFirmsRel
 * 
 * @property int $id
 * @property int $attendance_abscence_types_id
 * @property int $core_firms_id
 * @property int $status
 * @property int $bonus_status
 * @property int $worktime_status
 * @property int|null $core_other_incomes_id
 * @property string $authorization
 * 
 * @property CoreOtherIncome|null $core_other_income
 * @property AttendanceAbscenceType $attendance_abscence_type
 * @property CoreFirm $core_firm
 * @property Collection|AttendanceWorktimelimitAbscence[] $attendance_worktimelimit_abscences
 *
 * @package App\Models
 */
class AttendanceAbscenceTypesCoreFirmsRel extends Model
{
	protected $table = 'attendance_abscence_types_core_firms_rel';
	public $timestamps = false;

	protected $casts = [
		'attendance_abscence_types_id' => 'int',
		'core_firms_id' => 'int',
		'status' => 'int',
		'bonus_status' => 'int',
		'worktime_status' => 'int',
		'core_other_incomes_id' => 'int'
	];

	protected $fillable = [
		'attendance_abscence_types_id',
		'core_firms_id',
		'status',
		'bonus_status',
		'worktime_status',
		'core_other_incomes_id',
		'authorization'
	];

	public function core_other_income()
	{
		return $this->belongsTo(CoreOtherIncome::class, 'core_other_incomes_id');
	}

	public function attendance_abscence_type()
	{
		return $this->belongsTo(AttendanceAbscenceType::class, 'attendance_abscence_types_id');
	}

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function attendance_worktimelimit_abscences()
	{
		return $this->hasMany(AttendanceWorktimelimitAbscence::class, 'abscence_types_id', 'attendance_abscence_types_id');
	}
}
