<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreHierarchyUpdater
 * 
 * @property int $id
 * @property Carbon $from_date
 * @property string $parent_payroll_software_id
 * @property int $child_core_legal_entities_id
 * @property int $core_firms_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CoreHierarchyUpdater extends Model
{
	protected $table = 'core_hierarchy_updater';

	protected $casts = [
		'from_date' => 'datetime',
		'child_core_legal_entities_id' => 'int',
		'core_firms_id' => 'int'
	];

	protected $fillable = [
		'from_date',
		'parent_payroll_software_id',
		'child_core_legal_entities_id',
		'core_firms_id'
	];
}
