<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreOtherIncome
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $payroll_software_id
 * @property string $name
 * @property int $status
 * 
 * @property CoreFirm $core_firm
 * @property Collection|AttendanceAbscenceTypesCoreFirmsRel[] $attendance_abscence_types_core_firms_rels
 * @property Collection|AttendanceOffdayTypesCoreFirmsOrder[] $attendance_offday_types_core_firms_orders
 *
 * @package App\Models
 */
class CoreOtherIncome extends Model
{
	protected $table = 'core_other_incomes';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'payroll_software_id',
		'name',
		'status'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function attendance_abscence_types_core_firms_rels()
	{
		return $this->hasMany(AttendanceAbscenceTypesCoreFirmsRel::class, 'core_other_incomes_id');
	}

	public function attendance_offday_types_core_firms_orders()
	{
		return $this->hasMany(AttendanceOffdayTypesCoreFirmsOrder::class, 'core_other_incomes_id');
	}
}
