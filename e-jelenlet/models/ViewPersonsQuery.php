<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ViewPersonsQuery
 * 
 * @property int $core_persons_id
 * @property string|null $email
 * @property string|null $name
 * @property string|null $ohr
 * @property string|null $other_identification
 * @property string|null $password
 * @property string|null $active
 * @property string|null $lang
 * @property string|null $password_repeat
 * @property string|null $tax_id
 * @property string|null $forbid_logging_in
 *
 * @package App\Models
 */
class ViewPersonsQuery extends Model
{
	protected $table = 'view_persons_query';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'core_persons_id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'core_persons_id',
		'email',
		'name',
		'ohr',
		'other_identification',
		'password',
		'active',
		'lang',
		'password_repeat',
		'tax_id',
		'forbid_logging_in'
	];
}
