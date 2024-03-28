<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CorePasswordsLog
 * 
 * @property int $id
 * @property int $core_persons_id
 * @property string $password
 * @property int $login_count
 * @property Carbon $created_at
 * 
 * @property CorePerson $core_person
 *
 * @package App\Models
 */
class CorePasswordsLog extends Model
{
	protected $table = 'core_passwords_logs';
	public $timestamps = false;

	protected $casts = [
		'core_persons_id' => 'int',
		'login_count' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'core_persons_id',
		'password',
		'login_count'
	];

	public function core_person()
	{
		return $this->belongsTo(CorePerson::class, 'core_persons_id');
	}
}
