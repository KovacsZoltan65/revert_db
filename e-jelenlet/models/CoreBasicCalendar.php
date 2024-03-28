<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreBasicCalendar
 * 
 * @property int $id
 * @property int $year
 * @property Carbon $date
 * @property int $day_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CoreBasicCalendar extends Model
{
	protected $table = 'core_basic_calendar';

	protected $casts = [
		'year' => 'int',
		'date' => 'datetime',
		'day_type' => 'int'
	];

	protected $fillable = [
		'year',
		'date',
		'day_type'
	];
}
