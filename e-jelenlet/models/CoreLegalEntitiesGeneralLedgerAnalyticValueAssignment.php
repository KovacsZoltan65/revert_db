<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLegalEntitiesGeneralLedgerAnalyticValueAssignment
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $core_general_ledger_analytics_id
 * @property int $core_general_ledger_analytics_value_id
 * @property Carbon $start_date
 * @property Carbon|null $end_date
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreGeneralLedgerAnalytic $core_general_ledger_analytic
 * @property CoreGeneralLedgerAnalyticsValue $core_general_ledger_analytics_value
 *
 * @package App\Models
 */
class CoreLegalEntitiesGeneralLedgerAnalyticValueAssignment extends Model
{
	protected $table = 'core_legal_entities_general_ledger_analytic_value_assignments';
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'core_general_ledger_analytics_id' => 'int',
		'core_general_ledger_analytics_value_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'core_general_ledger_analytics_id',
		'core_general_ledger_analytics_value_id',
		'start_date',
		'end_date'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function core_general_ledger_analytic()
	{
		return $this->belongsTo(CoreGeneralLedgerAnalytic::class, 'core_general_ledger_analytics_id');
	}

	public function core_general_ledger_analytics_value()
	{
		return $this->belongsTo(CoreGeneralLedgerAnalyticsValue::class);
	}
}
