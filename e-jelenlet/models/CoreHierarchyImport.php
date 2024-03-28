<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreHierarchyImport
 * 
 * @property int $id
 * @property Carbon $from_date
 * @property int $core_firms_id
 * @property string $parent_payroll_software_id
 * @property int $child_core_legal_entities_id
 * @property int $processed
 * @property string $fail_message
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CoreHierarchyImport extends Model
{
	protected $table = 'core_hierarchy_import';

	protected $casts = [
		'from_date' => 'datetime',
		'core_firms_id' => 'int',
		'child_core_legal_entities_id' => 'int',
		'processed' => 'int'
	];

	protected $fillable = [
		'from_date',
		'core_firms_id',
		'parent_payroll_software_id',
		'child_core_legal_entities_id',
		'processed',
		'fail_message'
	];
}
