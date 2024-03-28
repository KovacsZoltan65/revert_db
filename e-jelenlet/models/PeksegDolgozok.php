<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PeksegDolgozok
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property int $uzlet_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class PeksegDolgozok extends Model
{
	use SoftDeletes;
	protected $table = 'pekseg_dolgozok';

	protected $casts = [
		'uzlet_id' => 'int'
	];

	protected $fillable = [
		'name',
		'email',
		'phone',
		'uzlet_id'
	];
}
