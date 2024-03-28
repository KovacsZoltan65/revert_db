<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreCostCenter
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $payroll_software_id
 * @property string $name
 * @property int $status
 * 
 * @property CoreFirm $core_firm
 * @property Collection|CoreLegalEntitiesCostCenterAssignment[] $core_legal_entities_cost_center_assignments
 *
 * @package App\Models
 */
class CoreCostCenter extends Model
{
	protected $table = 'core_cost_centers';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'payroll_software_id',
		'name',
		'status'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_legal_entities_cost_center_assignments()
	{
		return $this->hasMany(CoreLegalEntitiesCostCenterAssignment::class, 'core_cost_centers_id');
	}
}
