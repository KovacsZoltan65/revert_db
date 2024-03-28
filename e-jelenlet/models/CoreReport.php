<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreReport
 * 
 * @property int $id
 * @property int $core_legal_entities_id
 * @property int $core_firms_id
 * @property int $core_report_classes_id
 * @property string $name
 * @property string $data
 * @property string $core_legal_entity_attribute_ids
 * @property string $core_person_attribute_ids
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property CoreFirm $core_firm
 * @property CoreReportClass $core_report_class
 *
 * @package App\Models
 */
class CoreReport extends Model
{
	protected $table = 'core_reports';

	protected $casts = [
		'core_legal_entities_id' => 'int',
		'core_firms_id' => 'int',
		'core_report_classes_id' => 'int'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'core_firms_id',
		'core_report_classes_id',
		'name',
		'data',
		'core_legal_entity_attribute_ids',
		'core_person_attribute_ids'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}

	public function core_report_class()
	{
		return $this->belongsTo(CoreReportClass::class, 'core_report_classes_id');
	}
}
