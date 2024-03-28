<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreSessionContainer
 * 
 * @property int $id
 * @property string $session_id
 * @property int|null $core_legal_entities_id
 * @property string|null $values
 * @property int $permission_changed
 * @property Carbon|null $expiration_time
 * 
 * @property CoreLegalEntity|null $core_legal_entity
 *
 * @package App\Models
 */
class CoreSessionContainer extends Model
{
	protected $table = 'core_session_container';
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'permission_changed' => 'int',
		'expiration_time' => 'datetime'
	];

	protected $fillable = [
		'session_id',
		'core_legal_entities_id',
		'values',
		'permission_changed',
		'expiration_time'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}
}
