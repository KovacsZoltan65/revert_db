<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreSpecialPersonStatusType
 * 
 * @property int $id
 * @property int $_order
 * 
 * @property Collection|CoreSpecialPersonStatus[] $core_special_person_statuses
 *
 * @package App\Models
 */
class CoreSpecialPersonStatusType extends Model
{
	protected $table = 'core_special_person_status_types';
	public $timestamps = false;

	protected $casts = [
		'_order' => 'int'
	];

	protected $fillable = [
		'_order'
	];

	public function core_special_person_statuses()
	{
		return $this->hasMany(CoreSpecialPersonStatus::class, 'core_special_person_status_types_id');
	}
}
