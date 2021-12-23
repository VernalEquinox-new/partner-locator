<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LocState
 * 
 * @property int $state_id
 * @property string $name
 * @property string|null $short_name
 * @property int $country_id
 *
 * @package App\Models
 */
class LocState extends Model
{
	protected $table = 'loc_state';
	protected $primaryKey = 'state_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int'
	];

	protected $fillable = [
		'name',
		'short_name',
		'country_id'
	];
}
