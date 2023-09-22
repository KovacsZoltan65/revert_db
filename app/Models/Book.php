<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Book
 * 
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Book extends Model
{
	use SoftDeletes;
	protected $table = 'books';

	protected $fillable = [
		'title',
		'author',
		'image'
	];
}
