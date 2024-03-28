<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreReportClass
 * 
 * @property int $id
 * @property int $core_report_categories_id
 * @property string $class_name
 * @property string $description
 * 
 * @property CoreReportCategory $core_report_category
 * @property Collection|CoreReport[] $core_reports
 *
 * @package App\Models
 */
class CoreReportClass extends Model
{
	protected $table = 'core_report_classes';
	public $timestamps = false;

	protected $casts = [
		'core_report_categories_id' => 'int'
	];

	protected $fillable = [
		'core_report_categories_id',
		'class_name',
		'description'
	];

	public function core_report_category()
	{
		return $this->belongsTo(CoreReportCategory::class, 'core_report_categories_id');
	}

	public function core_reports()
	{
		return $this->hasMany(CoreReport::class, 'core_report_classes_id');
	}
}
