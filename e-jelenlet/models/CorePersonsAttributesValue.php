<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CorePersonsAttributesValue
 * 
 * @property int $id
 * @property int $core_persons_id
 * @property int $core_persons_attributes_id
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CorePerson $core_person
 * @property CorePersonsAttribute $core_persons_attribute
 *
 * @package App\Models
 */
class CorePersonsAttributesValue extends Model
{
	protected $table = 'core_persons_attributes_values';

	protected $casts = [
		'core_persons_id' => 'int',
		'core_persons_attributes_id' => 'int'
	];

	protected $fillable = [
		'core_persons_id',
		'core_persons_attributes_id',
		'value'
	];

	public function core_person()
	{
		return $this->belongsTo(CorePerson::class, 'core_persons_id');
	}

	public function core_persons_attribute()
	{
		return $this->belongsTo(CorePersonsAttribute::class, 'core_persons_attributes_id');
	}
}
