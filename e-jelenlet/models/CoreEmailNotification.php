<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreEmailNotification
 * 
 * @property int $id
 * @property int $core_email_notification_types_id
 * @property string $blade_file_name
 * @property int|null $core_localization_id
 * @property int|null $core_legal_entities_id
 * @property int|null $source_core_legal_entities_id
 * @property string $email_address
 * @property string $subject
 * @property string $variables
 * @property Carbon $expiration
 * @property Carbon|null $sent_time
 * @property int $sent_status
 * @property int|null $error_code
 * @property string|null $error_message
 * @property string|null $blocked_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreEmailNotificationType $core_email_notification_type
 * @property CoreLocalization|null $core_localization
 * @property CoreLegalEntity|null $core_legal_entity
 * @property Collection|AttendanceApprovalButton[] $attendance_approval_buttons
 * @property Collection|AttendanceApprovalLink[] $attendance_approval_links
 *
 * @package App\Models
 */
class CoreEmailNotification extends Model
{
	protected $table = 'core_email_notifications';

	protected $casts = [
		'core_email_notification_types_id' => 'int',
		'core_localization_id' => 'int',
		'core_legal_entities_id' => 'int',
		'source_core_legal_entities_id' => 'int',
		'expiration' => 'datetime',
		'sent_time' => 'datetime',
		'sent_status' => 'int',
		'error_code' => 'int'
	];

	protected $fillable = [
		'core_email_notification_types_id',
		'blade_file_name',
		'core_localization_id',
		'core_legal_entities_id',
		'source_core_legal_entities_id',
		'email_address',
		'subject',
		'variables',
		'expiration',
		'sent_time',
		'sent_status',
		'error_code',
		'error_message',
		'blocked_name'
	];

	public function core_email_notification_type()
	{
		return $this->belongsTo(CoreEmailNotificationType::class, 'core_email_notification_types_id');
	}

	public function core_localization()
	{
		return $this->belongsTo(CoreLocalization::class);
	}

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'source_core_legal_entities_id');
	}

	public function attendance_approval_buttons()
	{
		return $this->hasMany(AttendanceApprovalButton::class, 'core_email_notifications_id');
	}

	public function attendance_approval_links()
	{
		return $this->hasMany(AttendanceApprovalLink::class, 'core_email_notifications_id');
	}
}
