<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceHolidayRule
 * 
 * @property int $id
 * @property string $name
 * @property bool $notification
 * @property int $core_firms_id
 * @property int $year
 * @property int $creator_legal_entities_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|AttendanceHolidayRuleSchedule[] $attendance_holiday_rule_schedules
 * @property Collection|AttendanceHolidayRulesLegalEntitiesRel[] $attendance_holiday_rules_legal_entities_rels
 *
 * @package App\Models
 */
class AttendanceHolidayRule extends Model
{
	protected $table = 'attendance_holiday_rules';

	protected $casts = [
		'notification' => 'bool',
		'core_firms_id' => 'int',
		'year' => 'int',
		'creator_legal_entities_id' => 'int'
	];

	protected $fillable = [
		'name',
		'notification',
		'core_firms_id',
		'year',
		'creator_legal_entities_id'
	];

	public function attendance_holiday_rule_schedules()
	{
		return $this->hasMany(AttendanceHolidayRuleSchedule::class);
	}

	public function attendance_holiday_rules_legal_entities_rels()
	{
		return $this->hasMany(AttendanceHolidayRulesLegalEntitiesRel::class);
	}
}
