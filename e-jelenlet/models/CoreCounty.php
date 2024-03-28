<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreCounty
 * 
 * @property int $id
 * @property string $name
 * 
 * @property Collection|CoreCity[] $core_cities
 *
 * @package App\Models
 */
class CoreCounty extends Model
{
	protected $table = 'core_counties';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function core_cities()
	{
		return $this->hasMany(CoreCity::class, 'core_counties_id');
	}
}
