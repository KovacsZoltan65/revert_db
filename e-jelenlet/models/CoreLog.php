<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreLog
 * 
 * @property int $id
 * @property int|null $core_firms_id
 * @property int|null $core_legal_entities_id
 * @property int|null $substitution_core_persons_id
 * @property string|null $IP_address
 * @property int $core_log_messages_id
 * @property int|null $core_components_id
 * @property int|null $core_modules_id
 * @property int|null $core_actions_id
 * @property int $success_type
 * @property string|null $logged_data
 * @property int $status
 * @property Carbon|null $created_at
 * 
 * @property CoreLegalEntity|null $core_legal_entity
 * @property CorePerson|null $core_person
 * @property CoreLogMessage $core_log_message
 * @property CoreComponent|null $core_component
 * @property CoreModule|null $core_module
 * @property CoreAction|null $core_action
 * @property CoreFirm|null $core_firm
 *
 * @package App\Models
 */
class CoreLog extends Model
{
	protected $table = 'core_logs';
	public $timestamps = false;

	protected $casts = [
		'core_firms_id' => 'int',
		'core_legal_entities_id' => 'int',
		'substitution_core_persons_id' => 'int',
		'core_log_messages_id' => 'int',
		'core_components_id' => 'int',
		'core_modules_id' => 'int',
		'core_actions_id' => 'int',
		'success_type' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'core_firms_id',
		'core_legal_entities_id',
		'substitution_core_persons_id',
		'IP_address',
		'core_log_messages_id',
		'core_components_id',
		'core_modules_id',
		'core_actions_id',
		'success_type',
		'logged_data',
		'status'
	];

	public function core_legal_entity()
	{
		return $this->belongsTo(CoreLegalEntity::class, 'core_legal_entities_id');
	}

	public function core_person()
	{
		return $this->belongsTo(CorePerson::class, 'substitution_core_persons_id');
	}

	public function core_log_message()
	{
		return $this->belongsTo(CoreLogMessage::class, 'core_log_messages_id');
	}

	public function core_component()
	{
		return $this->belongsTo(CoreComponent::class, 'core_components_id');
	}

	public function core_module()
	{
		return $this->belongsTo(CoreModule::class, 'core_modules_id');
	}

	public function core_action()
	{
		return $this->belongsTo(CoreAction::class, 'core_actions_id');
	}

	public function core_firm()
	{
		return $this->belongsTo(CoreFirm::class, 'core_firms_id');
	}
}
