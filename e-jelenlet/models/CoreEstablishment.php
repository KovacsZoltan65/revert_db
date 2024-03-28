<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreEstablishment
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $payroll_software_id
 * @property string $name
 * @property int $status
 * 
 * @property CoreFirm $core_firm
 * @property Collection|CoreLegalEntitiesEstablishmentAssignment[] $core_legal_entities_establishment_assignments
 * @property Collection|CoreProfitCenter[] $core_profit_centers
 *
 * @package App\Models
 */
class CoreEstablishment extends Model
{
	protected $table = 'core_establishments';
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

	public function core_legal_entities_establishment_assignments()
	{
		return $this->hasMany(CoreLegalEntitiesEstablishmentAssignment::class, 'core_establishments_id');
	}

	public function core_profit_centers()
	{
		return $this->hasMany(CoreProfitCenter::class, 'establishment_id');
	}
}
