<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CorePersonsSystemAttribute
 * 
 * @property int $id
 * @property string $developer_description
 * @property int $editable
 * @property int $show_in_legal_entity_selector
 * @property string $model_name
 *
 * @package App\Models
 */
class CorePersonsSystemAttribute extends Model
{
	protected $table = 'core_persons_system_attributes';
	public $timestamps = false;

	protected $casts = [
		'editable' => 'int',
		'show_in_legal_entity_selector' => 'int'
	];

	protected $fillable = [
		'developer_description',
		'editable',
		'show_in_legal_entity_selector',
		'model_name'
	];
}
