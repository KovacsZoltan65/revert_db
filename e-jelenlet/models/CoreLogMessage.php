<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLogMessage
 * 
 * @property int $id
 * @property int $category
 * 
 * @property Collection|CoreLog[] $core_logs
 *
 * @package App\Models
 */
class CoreLogMessage extends Model
{
	protected $table = 'core_log_messages';
	public $timestamps = false;

	protected $casts = [
		'category' => 'int'
	];

	protected $fillable = [
		'category'
	];

	public function core_logs()
	{
		return $this->hasMany(CoreLog::class, 'core_log_messages_id');
	}
}
