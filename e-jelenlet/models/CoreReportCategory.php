<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreReportCategory
 * 
 * @property int $id
 * @property int $_order
 * 
 * @property Collection|CoreReportClass[] $core_report_classes
 *
 * @package App\Models
 */
class CoreReportCategory extends Model
{
	protected $table = 'core_report_categories';
	public $timestamps = false;

	protected $casts = [
		'_order' => 'int'
	];

	protected $fillable = [
		'_order'
	];

	public function core_report_classes()
	{
		return $this->hasMany(CoreReportClass::class, 'core_report_categories_id');
	}
}
