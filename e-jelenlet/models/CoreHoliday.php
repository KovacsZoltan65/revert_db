<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreHoliday
 * 
 * @property int $id
 * @property int|null $core_firms_id
 * @property Carbon $date
 * @property int $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreFirm|null $core_firm
 *
 * @package App\Models
 */
class CoreHoliday extends Model
{
	protected $table = 'core_holidays';

	protected $casts = [
		'core_firms_id' => 'int',
		'date' => 'datetime',
		'type' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'date',
		'type'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}
}
