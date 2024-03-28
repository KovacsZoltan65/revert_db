<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceLegalStock
 * 
 * @property int $id
 * @property int|null $core_firms_id
 * @property int $core_legal_entities_id
 * @property int $attendance_abscence_types_id
 * @property Carbon $start_date
 * @property Carbon $end_date
 * 
 * @property CoreLegalEntity $core_legal_entity
 * @property AttendanceAbscenceType $attendance_abscence_type
 * @property CoreFirm|null $core_firm
 *
 * @package App\Models
 */
class AttendanceLegalStock extends Model
{
	protected $table = 'attendance_legal_stock';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'core_legal_entities_id' => 'int',
		'attendance_abscence_types_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'core_firms_id',
		'core_legal_entities_id',
		'attendance_abscence_types_id',
		'start_date',
		'end_date'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function attendance_abscence_type()
	{
		return $this->belongsTo(AttendanceAbscenceType::class, 'attendance_abscence_types_id');
	}

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}
}
