<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceApprovalButton
 * 
 * @property int $id
 * @property int $core_email_notifications_id
 * @property int $legalentity_id
 * @property string $token
 * @property string $yes
 * @property string $no
 * @property int $use_status
 * @property Carbon|null $expires_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreEmailNotification $core_email_notification
 *
 * @package App\Models
 */
class AttendanceApprovalButton extends Model
{
	protected $table = 'attendance_approval_buttons';

	protected $casts = [
		'core_email_notifications_id' => 'int',
		'legalentity_id' => 'int',
		'use_status' => 'int',
		'expires_at' => 'datetime'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'core_email_notifications_id',
		'legalentity_id',
		'token',
		'yes',
		'no',
		'use_status',
		'expires_at'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'legalentity_id');
	}

	public function core_email_notification()
	{
		return $this->belongsTo(CoreEmailNotification::class, 'core_email_notifications_id');
	}
}
