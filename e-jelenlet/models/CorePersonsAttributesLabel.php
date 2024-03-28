<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CorePersonsAttributesLabel
 * 
 * @property int $id
 * @property int $core_persons_attributes_id
 * @property int $core_localization_id
 * @property string $value
 * 
 * @property CorePersonsAttribute $core_persons_attribute
 * @property CoreLocalization $core_localization
 *
 * @package App\Models
 */
class CorePersonsAttributesLabel extends Model
{
	protected $table = 'core_persons_attributes_labels';
	public $timestamps = false;

	protected $casts = [
		'core_persons_attributes_id' => 'int',
		'core_localization_id' => 'int'
	];

	protected $fillable = [
		'core_persons_attributes_id',
		'core_localization_id',
		'value'
	];

	public function core_persons_attribute()
	{
		return $this->belongsTo(CorePersonsAttribute::class, 'core_persons_attributes_id');
	}

	public function core_localization()
	{
		return $this->belongsTo(CoreLocalization::class);
	}
}
