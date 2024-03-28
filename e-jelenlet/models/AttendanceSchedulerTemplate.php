<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceSchedulerTemplate
 * 
 * @property int $id
 * @property int|null $firm_id
 * @property int $legal_entity_id
 * @property string $title
 * @property int $default
 * @property string $config
 *
 * @package App\Models
 */
class AttendanceSchedulerTemplate extends Model
{
	protected $table = 'attendance_scheduler_templates';
	public $timestamps = false;

	protected $casts = [
		'firm_id' => 'int',
		'legal_entity_id' => 'int',
		'default' => 'int'
	];

	protected $fillable = [
		'firm_id',
		'legal_entity_id',
		'title',
		'default',
		'config'
	];
}
