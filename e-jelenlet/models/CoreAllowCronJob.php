<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreAllowCronJob
 * 
 * @property int $id
 * @property string $name
 * @property int $core_firms_id
 * @property bool $active
 * @property array|null $data
 * 
 * @property CoreFirm $core_firm
 *
 * @package App\Models
 */
class CoreAllowCronJob extends Model
{
	protected $table = 'core_allow_cron_job';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'active' => 'bool',
		'data' => 'json'
	];

	protected $fillable = [
		'name',
		'core_firms_id',
		'active',
		'data'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}
}
