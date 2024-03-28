<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreSurfaceNotification
 * 
 * @property int $id
 * @property int $notification_type
 * @property int $subtype
 * @property int $target_legal_entities_id
 * @property int $source_legal_entities_id
 * @property string $subject
 * @property bool $use_status
 * @property int|null $core_email_notifications_id
 * @property string|null $variables
 * @property string|null $combinable
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreLegalEntity $core_legal_entity
 *
 * @package App\Models
 */
class CoreSurfaceNotification extends Model
{
	protected $table = 'core_surface_notifications';

	protected $casts = [
		'notification_type' => 'int',
		'subtype' => 'int',
		'target_legal_entities_id' => 'int',
		'source_legal_entities_id' => 'int',
		'use_status' => 'bool',
		'core_email_notifications_id' => 'int'
	];

	protected $fillable = [
		'notification_type',
		'subtype',
		'target_legal_entities_id',
		'source_legal_entities_id',
		'subject',
		'use_status',
		'core_email_notifications_id',
		'variables',
		'combinable'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'source_legal_entities_id');
	}
}
