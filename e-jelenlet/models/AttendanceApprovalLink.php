<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceApprovalLink
 * 
 * @property int $id
 * @property string $token
 * @property int $user_id
 * @property int $legalentity_id
 * @property int $core_email_notifications_id
 * @property string $month
 * @property Carbon|null $expires_at
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreEmailNotification $core_email_notification
 *
 * @package App\Models
 */
class AttendanceApprovalLink extends Model
{
	protected $table = 'attendance_approval_links';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'legalentity_id' => 'int',
		'core_email_notifications_id' => 'int',
		'expires_at' => 'datetime'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'token',
		'user_id',
		'legalentity_id',
		'core_email_notifications_id',
		'month',
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
