<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreSubstitution
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $core_persons_id
 * @property Carbon|null $start_date
 * @property Carbon|null $end_date
 * @property string|null $note
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CorePerson $core_person
 *
 * @package App\Models
 */
class CoreSubstitution extends Model
{
	protected $table = 'core_substitutions';

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'core_persons_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'core_persons_id',
		'start_date',
		'end_date',
		'note',
		'status'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function core_person()
	{
		return $this->belongsTo(CorePerson::class, 'core_persons_id');
	}
}
