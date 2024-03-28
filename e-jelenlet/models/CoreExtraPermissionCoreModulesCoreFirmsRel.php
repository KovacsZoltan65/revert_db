<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreExtraPermissionCoreModulesCoreFirmsRel
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property int $core_modules_id
 * @property int|null $usable
 * @property string|null $name
 * 
 * @property CoreFirm $core_firm
 * @property CoreModule $core_module
 *
 * @package App\Models
 */
class CoreExtraPermissionCoreModulesCoreFirmsRel extends Model
{
	protected $table = 'core_extra_permission_core_modules_core_firms_rel';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'core_modules_id' => 'int',
		'usable' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'core_modules_id',
		'usable',
		'name'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_module()
	{
		return $this->belongsTo(CoreModule::class, 'core_modules_id');
	}
}
