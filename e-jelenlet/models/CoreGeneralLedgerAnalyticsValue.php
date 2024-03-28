<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreGeneralLedgerAnalyticsValue
 * 
 * @property int $id
 * @property int $core_firms_id
 * @property string $payroll_software_id
 * @property int $core_general_ledger_analytics_id
 * @property string $code
 * @property string $name
 * @property int $status
 * 
 * @property CoreFirm $core_firm
 * @property CoreGeneralLedgerAnalytic $core_general_ledger_analytic
 * @property Collection|CoreLegalEntitiesGeneralLedgerAnalyticValueAssignment[] $core_legal_entities_general_ledger_analytic_value_assignments
 *
 * @package App\Models
 */
class CoreGeneralLedgerAnalyticsValue extends Model
{
	protected $table = 'core_general_ledger_analytics_value';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'core_general_ledger_analytics_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'payroll_software_id',
		'core_general_ledger_analytics_id',
		'code',
		'name',
		'status'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_general_ledger_analytic()
	{
		return $this->belongsTo(CoreGeneralLedgerAnalytic::class, 'core_general_ledger_analytics_id');
	}

	public function core_legal_entities_general_ledger_analytic_value_assignments()
	{
		return $this->hasMany(CoreLegalEntitiesGeneralLedgerAnalyticValueAssignment::class);
	}
}
