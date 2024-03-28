<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreHierarchyUpdaterLog
 * 
 * @property int $id
 * @property int $new_parent_id
 * @property int|null $old_parent_id
 * @property int $child_id
 * @property int $firm_id
 * @property int $result
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CoreHierarchyUpdaterLog extends Model
{
	protected $table = 'core_hierarchy_updater_logs';

	protected $casts = [
		'new_parent_id' => 'int',
		'old_parent_id' => 'int',
		'child_id' => 'int',
		'firm_id' => 'int',
		'result' => 'int'
	];

	protected $fillable = [
		'new_parent_id',
		'old_parent_id',
		'child_id',
		'firm_id',
		'result'
	];
}
