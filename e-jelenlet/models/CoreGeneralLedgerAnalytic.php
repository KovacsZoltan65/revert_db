<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreGeneralLedgerAnalytic
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $payroll_software_id
 * @property string $name
 * 
 * @property CoreFirm $core_firm
 * @property Collection|CoreGeneralLedgerAnalyticsValue[] $core_general_ledger_analytics_values
 * @property Collection|CoreLegalEntitiesGeneralLedgerAnalyticValueAssignment[] $core_legal_entities_general_ledger_analytic_value_assignments
 *
 * @package App\Models
 */
class CoreGeneralLedgerAnalytic extends Model
{
	protected $table = 'core_general_ledger_analytics';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'payroll_software_id',
		'name'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_general_ledger_analytics_values()
	{
		return $this->hasMany(CoreGeneralLedgerAnalyticsValue::class, 'core_general_ledger_analytics_id');
	}

	public function core_legal_entities_general_ledger_analytic_value_assignments()
	{
		return $this->hasMany(CoreLegalEntitiesGeneralLedgerAnalyticValueAssignment::class, 'core_general_ledger_analytics_id');
	}
}
