<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceOffdayType
 * 
 * @property int $id
 * @property string $payroll_software_id
 * @property int $selectable
 * 
 * @property Collection|AttendanceLegalEntitiesAbscence[] $attendance_legal_entities_abscences
 * @property Collection|AttendanceLegalEntitiesHolidayAmount[] $attendance_legal_entities_holiday_amounts
 * @property Collection|CoreFirm[] $core_firms
 *
 * @package App\Models
 */
class AttendanceOffdayType extends Model
{
	protected $table = 'attendance_offday_types';
	public $timestamps = false;

	protected $casts = [
		'selectable' => 'int'
	];

	protected $fillable = [
		'payroll_software_id',
		'selectable'
	];

	public function attendance_legal_entities_abscences()
	{
		return $this->hasMany(AttendanceLegalEntitiesAbscence::class, 'attendance_offday_types_id');
	}

	public function attendance_legal_entities_holiday_amounts()
	{
		return $this->hasMany(AttendanceLegalEntitiesHolidayAmount::class, 'attendance_offday_types_id');
	}

	public function core_firms()
	{
		return $this->belongsToMany(CoreFirm::class, 'attendance_offday_types_core_firms_order', 'attendance_offday_types_id', 'core_firms_id')
					->withPivot('id', '_order', 'status', 'core_other_incomes_id');
	}
}
