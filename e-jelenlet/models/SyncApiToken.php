<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SyncApiToken
 * 
 * @property int $id
 * @property string $client
 * @property string $token
 * @property bool $active
 * @property string $key
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|SyncTokenActionsRel[] $sync_token_actions_rels
 *
 * @package App\Models
 */
class SyncApiToken extends Model
{
	protected $table = 'sync_api_token';

	protected $casts = [
		'active' => 'bool'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'client',
		'token',
		'active',
		'key'
	];

	public function sync_token_actions_rels()
	{
		return $this->hasMany(SyncTokenActionsRel::class);
	}
}
