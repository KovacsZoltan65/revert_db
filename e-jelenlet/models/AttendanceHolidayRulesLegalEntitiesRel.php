<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceHolidayRulesLegalEntitiesRel
 * 
 * @property int $id
 * @property int $attendance_holiday_rule_id
 * @property int $core_legal_entities_id
 * 
 * @property AttendanceHolidayRule $attendance_holiday_rule
 *
 * @package App\Models
 */
class AttendanceHolidayRulesLegalEntitiesRel extends Model
{
	protected $table = 'attendance_holiday_rules_legal_entities_rel';
	public $timestamps = false;

	protected $casts = [
		'attendance_holiday_rule_id' => 'int',
		'core_legal_entities_id' => 'int'
	];

	protected $fillable = [
		'attendance_holiday_rule_id',
		'core_legal_entities_id'
	];

	public function attendance_holiday_rule()
	{
		return $this->belongsTo(AttendanceHolidayRule::class);
	}
}
