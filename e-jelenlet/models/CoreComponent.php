<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreComponent
 * 
 * @property int $id
 * @property string $directory
 * @property int $_order
 * 
 * @property Collection|CoreFirm[] $core_firms
 * @property Collection|CoreLog[] $core_logs
 * @property Collection|CoreModule[] $core_modules
 * @property Collection|CoreParameter[] $core_parameters
 *
 * @package App\Models
 */
class CoreComponent extends Model
{
	protected $table = 'core_components';
	public $timestamps = false;

	protected $casts = [
		'_order' => 'int'
	];

	protected $fillable = [
		'directory',
		'_order'
	];

	public function core_firms()
	{
		return $this->belongsToMany(CoreFirm::class, 'core_firms_core_components_rel', 'core_components_id', 'core_firms_id')
					->withPivot('id');
	}

	public function core_logs()
	{
		return $this->hasMany(CoreLog::class, 'core_components_id');
	}

	public function core_modules()
	{
		return $this->hasMany(CoreModule::class, 'core_components_id');
	}

	public function core_parameters()
	{
		return $this->hasMany(CoreParameter::class, 'core_components_id');
	}
}
