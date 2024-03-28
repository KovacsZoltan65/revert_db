<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreSubdomainAttribute
 * 
 * @property int $id
 * @property string $attribute
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CoreSubdomainAttribute extends Model
{
	protected $table = 'core_subdomain_attributes';

	protected $fillable = [
		'attribute',
		'value'
	];
}
