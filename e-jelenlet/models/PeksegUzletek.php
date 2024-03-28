<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PeksegUzletek
 * 
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class PeksegUzletek extends Model
{
	use SoftDeletes;
	protected $table = 'pekseg_uzletek';

	protected $fillable = [
		'name',
		'address',
		'phone'
	];
}
