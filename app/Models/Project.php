<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 21:45:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $launch_date
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $close_date
 * @property string $account_manager
 * @property string $project_manager
 * @property string $lead_developer
 * @property string $frontend_developer
 * @property string $additional_developer
 * @property string $notes
 * @property string $tags
 * @property int $status_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Status $status
 *
 * @package App\Models
 */
class Project extends Eloquent
{
    use SoftDeletes;

	protected $casts = [
		'status_id' => 'int'
	];

	protected $dates = [
		'launch_date',
		'start_date',
		'close_date'
	];

	protected $fillable = [
		'name',
		'launch_date',
		'start_date',
		'close_date',
		'account_manager',
		'project_manager',
		'lead_developer',
		'frontend_developer',
		'additional_developer',
		'notes',
		'tags',
		'status_id'
	];

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class);
	}
}
