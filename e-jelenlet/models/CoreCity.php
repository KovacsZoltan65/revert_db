<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreCity
 * 
 * @property int $id
 * @property string $name
 * @property int $core_counties_id
 * 
 * @property CoreCounty $core_county
 * @property Collection|CoreFirm[] $core_firms
 *
 * @package App\Models
 */
class CoreCity extends Model
{
	protected $table = 'core_cities';
	public $timestamps = false;

	protected $casts = [
		'core_counties_id' => 'int'
	];

	protected $fillable = [
		'name',
		'core_counties_id'
	];

	public function core_county()
	{
		return $this->belongsTo(CoreCounty::class, 'core_counties_id');
	}

	public function core_firms()
	{
		return $this->hasMany(CoreFirm::class, 'core_cities_id');
	}
}
