<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ViewSpecialPermissionsQuery
 * 
 * @property int $core_actions_id
 * @property int $source_legal_entity_id
 * @property int $target_legal_entity_id
 * @property int $target_person_id
 * @property string $target_person_name
 *
 * @package App\Models
 */
class ViewSpecialPermissionsQuery extends Model
{
	protected $table = 'view_special_permissions_query';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'core_actions_id' => 'int',
		'source_legal_entity_id' => 'int',
		'target_legal_entity_id' => 'int',
		'target_person_id' => 'int'
	];

	protected $fillable = [
		'core_actions_id',
		'source_legal_entity_id',
		'target_legal_entity_id',
		'target_person_id',
		'target_person_name'
	];
}
