<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesHolidayAmount
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $attendance_offday_types_id
 * @property int $year
 * @property int $value
 * @property int $used_value
 * @property int|null $amount_from_hq
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property AttendanceOffdayType $attendance_offday_type
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesHolidayAmount extends Model
{
	protected $table = 'attendance_legal_entities_holiday_amounts';
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'attendance_offday_types_id' => 'int',
		'year' => 'int',
		'value' => 'int',
		'used_value' => 'int',
		'amount_from_hq' => 'int'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'attendance_offday_types_id',
		'year',
		'value',
		'used_value',
		'amount_from_hq'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function attendance_offday_type()
	{
		return $this->belongsTo(AttendanceOffdayType::class, 'attendance_offday_types_id');
	}
}
