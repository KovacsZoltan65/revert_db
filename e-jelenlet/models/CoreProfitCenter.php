<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreProfitCenter
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string|null $payroll_software_id
 * @property string $name
 * @property int|null $establishment_id
 * @property int $status
 * 
 * @property CoreFirm $core_firm
 * @property CoreEstablishment|null $core_establishment
 * @property Collection|CoreLegalEntitiesProfitCenterAssignment[] $core_legal_entities_profit_center_assignments
 *
 * @package App\Models
 */
class CoreProfitCenter extends Model
{
	protected $table = 'core_profit_centers';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'establishment_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'payroll_software_id',
		'name',
		'establishment_id',
		'status'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_establishment()
	{
		return $this->belongsTo(CoreEstablishment::class, 'establishment_id');
	}

	public function core_legal_entities_profit_center_assignments()
	{
		return $this->hasMany(CoreLegalEntitiesProfitCenterAssignment::class, 'core_profit_centers_id');
	}
}
