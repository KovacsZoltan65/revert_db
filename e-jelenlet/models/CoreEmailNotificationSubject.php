<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreEmailNotificationSubject
 * 
 * @property int $id
 * @property int $core_email_notification_types_type
 * @property int $subtype
 * @property int $core_firms_id
 * @property int|null $localization_id
 * @property string $subject
 * 
 * @property CoreFirm $core_firm
 * @property CoreLocalization|null $core_localization
 *
 * @package App\Models
 */
class CoreEmailNotificationSubject extends Model
{
	protected $table = 'core_email_notification_subjects';
	public $timestamps = false;

	protected $casts = [
		'core_email_notification_types_type' => 'int',
		'subtype' => 'int',
		'core_firms_id' => 'int',
		'localization_id' => 'int'
	];

	protected $fillable = [
		'core_email_notification_types_type',
		'subtype',
		'core_firms_id',
		'localization_id',
		'subject'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_localization()
	{
		return $this->belongsTo(CoreLocalization::class, 'localization_id');
	}
}
