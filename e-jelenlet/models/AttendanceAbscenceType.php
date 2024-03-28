<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceAbscenceType
 * 
 * @property int $id
 * 
 * @property Collection|CoreFirm[] $core_firms
 * @property Collection|AttendanceLegalEntitiesAbscence[] $attendance_legal_entities_abscences
 * @property Collection|AttendanceLegalStock[] $attendance_legal_stocks
 *
 * @package App\Models
 */
class AttendanceAbscenceType extends Model
{
	protected $table = 'attendance_abscence_types';
	public $timestamps = false;

	public function core_firms()
	{
		return $this->belongsToMany(CoreFirm::class, 'attendance_abscence_types_core_firms_rel', 'attendance_abscence_types_id', 'core_firms_id')
					->withPivot('id', 'status', 'bonus_status', 'worktime_status', 'core_other_incomes_id', 'authorization');
	}

	public function attendance_legal_entities_abscences()
	{
		return $this->hasMany(AttendanceLegalEntitiesAbscence::class, 'attendance_abscence_types_id');
	}

	public function attendance_legal_stocks()
	{
		return $this->hasMany(AttendanceLegalStock::class, 'attendance_abscence_types_id');
	}
}
