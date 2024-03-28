<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ViewLegalEntitiesOffdaysQuery
 * 
 * @property int|null $attendance_legal_entities_calendar_id
 * @property int $attendance_legal_entities_abscences_id
 * @property int|null $attendance_offday_types_id
 * @property string $core_firms_id
 * @property Carbon $_date
 * @property int $core_legal_entities_id
 * @property int|null $creator_legal_entity_id
 * @property int $legal_entity_confirmed
 * @property int $boss_confirmed
 * @property int|null $boss_confirmed_id
 * @property Carbon|null $created_at
 *
 * @package App\Models
 */
class ViewLegalEntitiesOffdaysQuery extends Model
{
	protected $table = 'view_legal_entities_offdays_query';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'attendance_legal_entities_calendar_id' => 'int',
		'attendance_legal_entities_abscences_id' => 'int',
		'attendance_offday_types_id' => 'int',
		'_date' => 'datetime',
		'core_legal_entities_id' => 'int',
		'creator_legal_entity_id' => 'int',
		'legal_entity_confirmed' => 'int',
		'boss_confirmed' => 'int',
		'boss_confirmed_id' => 'int'
	];

	protected $fillable = [
		'attendance_legal_entities_calendar_id',
		'attendance_legal_entities_abscences_id',
		'attendance_offday_types_id',
		'core_firms_id',
		'_date',
		'core_legal_entities_id',
		'creator_legal_entity_id',
		'legal_entity_confirmed',
		'boss_confirmed',
		'boss_confirmed_id'
	];
}
