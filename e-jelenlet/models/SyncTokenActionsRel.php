<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SyncTokenActionsRel
 * 
 * @property int $id
 * @property int $sync_api_token_id
 * @property int $core_actions_id
 * 
 * @property SyncApiToken $sync_api_token
 *
 * @package App\Models
 */
class SyncTokenActionsRel extends Model
{
	protected $table = 'sync_token_actions_rel';
	public $timestamps = false;

	protected $casts = [
		'sync_api_token_id' => 'int',
		'core_actions_id' => 'int'
	];

	protected $fillable = [
		'sync_api_token_id',
		'core_actions_id'
	];

	public function sync_api_token()
	{
		return $this->belongsTo(SyncApiToken::class);
	}
}
