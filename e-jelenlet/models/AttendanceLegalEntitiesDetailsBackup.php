<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesDetailsBackup
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property array $content
 * @property bool|null $status
 * @property Carbon $valid_time
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreLegalEntity $core_legal_entity
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesDetailsBackup extends Model
{
	protected $table = 'attendance_legal_entities_details_backup';

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'content' => 'json',
		'status' => 'bool',
		'valid_time' => 'datetime'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'content',
		'status',
		'valid_time'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}
}
