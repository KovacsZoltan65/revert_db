<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CorePersonDetectionEnvironment
 * 
 * @property int $id
 * @property int $core_person_id
 * @property string $ip_address
 * @property string|null $device_type
 * @property string|null $browser_family
 * @property string|null $browser_version
 * @property string|null $platform_family
 * @property int|null $platform_version
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CorePerson $core_person
 *
 * @package App\Models
 */
class CorePersonDetectionEnvironment extends Model
{
	protected $table = 'core_person_detection_environments';

	protected $casts = [
		'core_person_id' => 'int',
		'platform_version' => 'int'
	];

	protected $fillable = [
		'core_person_id',
		'ip_address',
		'device_type',
		'browser_family',
		'browser_version',
		'platform_family',
		'platform_version'
	];

	public function core_person()
	{
		return $this->belongsTo(CorePerson::class);
	}
}
