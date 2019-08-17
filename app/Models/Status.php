<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 21:44:50 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Status
 * 
 * @property int $id
 * @property string $name
 * @property string $color_hex
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $projects
 *
 * @package App\Models
 */
class Status extends Eloquent
{
	protected $table = 'status';

	protected $fillable = [
		'name',
		'color_hex'
	];

	public function projects()
	{
		return $this->hasMany(\App\Models\Project::class);
	}
}
