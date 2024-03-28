<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CorePublicPlace
 * 
 * @property int $id
 * @property string $name
 * 
 * @property Collection|CoreFirm[] $core_firms
 *
 * @package App\Models
 */
class CorePublicPlace extends Model
{
	protected $table = 'core_public_places';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function core_firms()
	{
		return $this->hasMany(CoreFirm::class, 'core_public_places_id');
	}
}
