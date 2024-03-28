<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreEmailNotificationType
 * 
 * @property int $id
 * @property int $type
 * @property int $subtype
 * @property int $extra_notification
 * @property int $core_firms_id
 * @property int $is_combined
 * @property int $display
 * @property int|null $expiration_unit
 * @property string|null $expiration_values
 * @property Carbon|null $timing_time
 * @property string $template
 * 
 * @property CoreFirm $core_firm
 * @property Collection|CoreEmailNotification[] $core_email_notifications
 * @property Collection|CoreExtraEmailAddress[] $core_extra_email_addresses
 *
 * @package App\Models
 */
class CoreEmailNotificationType extends Model
{
	protected $table = 'core_email_notification_types';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'subtype' => 'int',
		'extra_notification' => 'int',
		'core_firms_id' => 'int',
		'is_combined' => 'int',
		'display' => 'int',
		'expiration_unit' => 'int',
		'timing_time' => 'datetime'
	];

	protected $fillable = [
		'type',
		'subtype',
		'extra_notification',
		'core_firms_id',
		'is_combined',
		'display',
		'expiration_unit',
		'expiration_values',
		'timing_time',
		'template'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_email_notifications()
	{
		return $this->hasMany(CoreEmailNotification::class, 'core_email_notification_types_id');
	}

	public function core_extra_email_addresses()
	{
		return $this->hasMany(CoreExtraEmailAddress::class, 'core_email_notifications_types_id');
	}
}
