<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreSsoOauthClient
 * 
 * @property int $id
 * @property string $name
 * @property string|null $client_id
 * @property string|null $secret_key
 * @property string $authorize_url
 * @property string $token_check_url
 * @property string $user_authentication_url
 * @property string $scope
 * @property string|null $user_interface
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CoreSsoOauthClient extends Model
{
	protected $table = 'core_sso_oauth_clients';

	protected $casts = [
		'status' => 'bool'
	];

	protected $hidden = [
		'secret_key'
	];

	protected $fillable = [
		'name',
		'client_id',
		'secret_key',
		'authorize_url',
		'token_check_url',
		'user_authentication_url',
		'scope',
		'user_interface',
		'status'
	];
}
