<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalEntitiesCarriedBalance
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $balance
 * 
 * @property CoreLegalEntity $core_legal_entity
 *
 * @package App\Models
 */
class AttendanceLegalEntitiesCarriedBalance extends Model
{
	protected $table = 'attendance_legal_entities_carried_balance';
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'balance' => 'int'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'balance'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}
}
