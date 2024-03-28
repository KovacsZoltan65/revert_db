<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLegalEntitiesAttribute
 * 
 * @property int $id
 * @property string $type
 * @property int $system
 * @property int $core_firms_id
 * @property int $visible_for_owner
 * @property int $visible_for_boss
 * @property int $visible_for_other
 * @property int $editable_for_owner
 * @property int $editable_for_boss
 * @property int $editable_for_other
 * @property int $visible_in_header
 * @property Carbon|null $deadline_if_required
 * @property int $value_required
 * @property int $value_unique
 * @property string $value_regex
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|CoreLegalEntitiesAttributesLabel[] $core_legal_entities_attributes_labels
 * @property Collection|CoreLegalEntitiesAttributesValue[] $core_legal_entities_attributes_values
 *
 * @package App\Models
 */
class CoreLegalEntitiesAttribute extends Model
{
	protected $table = 'core_legal_entities_attributes';

	protected $casts = [
		'system' => 'int',
		'core_firms_id' => 'int',
		'visible_for_owner' => 'int',
		'visible_for_boss' => 'int',
		'visible_for_other' => 'int',
		'editable_for_owner' => 'int',
		'editable_for_boss' => 'int',
		'editable_for_other' => 'int',
		'visible_in_header' => 'int',
		'deadline_if_required' => 'datetime',
		'value_required' => 'int',
		'value_unique' => 'int'
	];

	protected $fillable = [
		'type',
		'system',
		'core_firms_id',
		'visible_for_owner',
		'visible_for_boss',
		'visible_for_other',
		'editable_for_owner',
		'editable_for_boss',
		'editable_for_other',
		'visible_in_header',
		'deadline_if_required',
		'value_required',
		'value_unique',
		'value_regex'
	];

	public function core_legal_entities_attributes_labels()
	{
		return $this->hasMany(CoreLegalEntitiesAttributesLabel::class, 'core_legal_entities_attributes_id');
	}

	public function core_legal_entities_attributes_values()
	{
		return $this->hasMany(CoreLegalEntitiesAttributesValue::class, 'core_legal_entities_attributes_id');
	}
}
