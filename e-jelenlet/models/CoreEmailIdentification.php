<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreEmailIdentification
 * 
 * @property int $id
 * @property int $core_person_id
 * @property string $access_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CorePerson $core_person
 *
 * @package App\Models
 */
class CoreEmailIdentification extends Model
{
	protected $table = 'core_email_identification';

	protected $casts = [
		'core_person_id' => 'int'
	];

	protected $hidden = [
		'access_token'
	];

	protected $fillable = [
		'core_person_id',
		'access_token'
	];

	public function core_person()
	{
		return $this->belongsTo(CorePerson::class);
	}
}
