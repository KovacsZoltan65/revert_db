<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLocalization
 * 
 * @property int $id
 * @property string $language
 * @property string $language_original
 * @property string $language_file
 * @property int $status
 * @property int $_order
 * @property int $precedency_order
 * 
 * @property Collection|CoreEmailNotificationSubject[] $core_email_notification_subjects
 * @property Collection|CoreEmailNotification[] $core_email_notifications
 * @property Collection|CoreExtraEmailAddress[] $core_extra_email_addresses
 * @property Collection|CoreLegalEntitiesAttributesLabel[] $core_legal_entities_attributes_labels
 * @property Collection|CorePersonsAttributesLabel[] $core_persons_attributes_labels
 *
 * @package App\Models
 */
class CoreLocalization extends Model
{
	protected $table = 'core_localization';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'_order' => 'int',
		'precedency_order' => 'int'
	];

	protected $fillable = [
		'language',
		'language_original',
		'language_file',
		'status',
		'_order',
		'precedency_order'
	];

	public function core_email_notification_subjects()
	{
		return $this->hasMany(CoreEmailNotificationSubject::class, 'localization_id');
	}

	public function core_email_notifications()
	{
		return $this->hasMany(CoreEmailNotification::class);
	}

	public function core_extra_email_addresses()
	{
		return $this->hasMany(CoreExtraEmailAddress::class);
	}

	public function core_legal_entities_attributes_labels()
	{
		return $this->hasMany(CoreLegalEntitiesAttributesLabel::class);
	}

	public function core_persons_attributes_labels()
	{
		return $this->hasMany(CorePersonsAttributesLabel::class);
	}
}
