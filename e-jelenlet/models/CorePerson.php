<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CorePerson
 * 
 * @property int $id
 * 
 * @property Collection|CoreEmailIdentification[] $core_email_identifications
 * @property Collection|CoreLog[] $core_logs
 * @property Collection|CorePasswordsLog[] $core_passwords_logs
 * @property Collection|CorePersonDetectionEnvironment[] $core_person_detection_environments
 * @property Collection|CorePersonsAttributesValue[] $core_persons_attributes_values
 * @property Collection|CoreSubstitution[] $core_substitutions
 *
 * @package App\Models
 */
class CorePerson extends Model
{
	protected $table = 'core_persons';
	public $timestamps = false;

	public function core_email_identifications()
	{
		return $this->hasMany(CoreEmailIdentification::class);
	}

	public function core_logs()
	{
		return $this->hasMany(CoreLog::class, 'substitution_core_persons_id');
	}

	public function core_passwords_logs()
	{
		return $this->hasMany(CorePasswordsLog::class, 'core_persons_id');
	}

	public function core_person_detection_environments()
	{
		return $this->hasMany(CorePersonDetectionEnvironment::class);
	}

	public function core_persons_attributes_values()
	{
		return $this->hasMany(CorePersonsAttributesValue::class, 'core_persons_id');
	}

	public function core_substitutions()
	{
		return $this->hasMany(CoreSubstitution::class, 'core_persons_id');
	}
}
