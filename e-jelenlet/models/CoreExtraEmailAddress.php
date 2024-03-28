<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreExtraEmailAddress
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property string $email_address
 * @property int $core_email_notifications_types_id
 * @property int $core_localization_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreEmailNotificationType $core_email_notification_type
 * @property CoreLocalization $core_localization
 *
 * @package App\Models
 */
class CoreExtraEmailAddress extends Model
{
	protected $table = 'core_extra_email_addresses';

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'core_email_notifications_types_id' => 'int',
		'core_localization_id' => 'int'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'email_address',
		'core_email_notifications_types_id',
		'core_localization_id'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function core_email_notification_type()
	{
		return $this->belongsTo(CoreEmailNotificationType::class, 'core_email_notifications_types_id');
	}

	public function core_localization()
	{
		return $this->belongsTo(CoreLocalization::class);
	}
}
