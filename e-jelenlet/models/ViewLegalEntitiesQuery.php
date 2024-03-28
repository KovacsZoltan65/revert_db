<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ViewLegalEntitiesQuery
 * 
 * @property int $core_legal_entities_id
 * @property string|null $core_firms_id
 * @property string|null $legal_entity_name
 * @property string|null $core_establishments_id
 * @property string|null $core_departments_id
 * @property string|null $start_date
 * @property string|null $last_workday_date
 * @property string|null $end_date
 * @property string|null $last_export_date
 * @property string|null $outsourced_admin
 * @property string|null $payroll_software_id
 * @property string|null $virtual_legal_entity
 * @property string|null $core_persons_id
 * @property string|null $person_name
 * @property string|null $person_email
 *
 * @package App\Models
 */
class ViewLegalEntitiesQuery extends Model
{
	protected $table = 'view_legal_entities_query';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'core_legal_entities_id' => 'int'
	];

	protected $fillable = [
		'core_legal_entities_id',
		'core_firms_id',
		'legal_entity_name',
		'core_establishments_id',
		'core_departments_id',
		'start_date',
		'last_workday_date',
		'end_date',
		'last_export_date',
		'outsourced_admin',
		'payroll_software_id',
		'virtual_legal_entity',
		'core_persons_id',
		'person_name',
		'person_email'
	];
}
