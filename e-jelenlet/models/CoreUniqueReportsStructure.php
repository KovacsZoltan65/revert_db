<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreUniqueReportsStructure
 * 
 * @property int $id
 * @property int $category_id
 * @property int $class_id
 * @property string $field
 * @property string $class_name
 * @property string $filter
 * @property int $active
 * @property string $data
 *
 * @package App\Models
 */
class CoreUniqueReportsStructure extends Model
{
	protected $table = 'core_unique_reports_structure';
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'class_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'category_id',
		'class_id',
		'field',
		'class_name',
		'filter',
		'active',
		'data'
	];
}
