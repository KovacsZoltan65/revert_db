<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreFirmsCoreComponentsRel
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property int $core_components_id
 * 
 * @property CoreFirm $core_firm
 * @property CoreComponent $core_component
 *
 * @package App\Models
 */
class CoreFirmsCoreComponentsRel extends Model
{
	protected $table = 'core_firms_core_components_rel';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'core_components_id' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'core_components_id'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_component()
	{
		return $this->belongsTo(CoreComponent::class, 'core_components_id');
	}
}
