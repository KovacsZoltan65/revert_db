<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreCustomReport
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $core_firms_id
 * @property string $name
 * @property string $description
 * @property string $data_fields
 * @property string $data_filters
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreFirm $core_firm
 * @property CoreLegalEntity $core_legal_entity
 *
 * @package App\Models
 */
class CoreCustomReport extends Model
{
	protected $table = 'core_custom_reports';

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'core_firms_id' => 'int'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'core_firms_id',
		'name',
		'description',
		'data_fields',
		'data_filters'
	];

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}
}
