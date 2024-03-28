<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreSpecialPersonStatus
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $core_special_person_status_types_id
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property int $approval
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreSpecialPersonStatusType $core_special_person_status_type
 *
 * @package App\Models
 */
class CoreSpecialPersonStatus extends Model
{
	protected $table = 'core_special_person_statuses';

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'core_special_person_status_types_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'approval' => 'int'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'core_special_person_status_types_id',
		'start_date',
		'end_date',
		'approval'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function core_special_person_status_type()
	{
		return $this->belongsTo(CoreSpecialPersonStatusType::class, 'core_special_person_status_types_id');
	}
}
