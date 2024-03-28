<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceOffdayTypesCoreFirmsOrder
 * 
 * @property int $id
 * @property int $attendance_offday_types_id
 * @property int $core_firms_id
 * @property int|null $_order
 * @property int $status
 * @property int|null $core_other_incomes_id
 * 
 * @property AttendanceOffdayType $attendance_offday_type
 * @property CoreFirm $core_firm
 * @property CoreOtherIncome|null $core_other_income
 *
 * @package App\Models
 */
class AttendanceOffdayTypesCoreFirmsOrder extends Model
{
	protected $table = 'attendance_offday_types_core_firms_order';
	public $timestamps = false;

	protected $casts = [
		'attendance_offday_types_id' => 'int',
		'core_firms_id' => 'int',
		'_order' => 'int',
		'status' => 'int',
		'core_other_incomes_id' => 'int'
	];

	protected $fillable = [
		'attendance_offday_types_id',
		'core_firms_id',
		'_order',
		'status',
		'core_other_incomes_id'
	];

	public function attendance_offday_type()
	{
		return $this->belongsTo(AttendanceOffdayType::class, 'attendance_offday_types_id');
	}

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_other_income()
	{
		return $this->belongsTo(CoreOtherIncome::class, 'core_other_incomes_id');
	}
}
