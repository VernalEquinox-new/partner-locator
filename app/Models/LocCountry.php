<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LocCountry
 * 
 * @property int $country_id
 * @property string $name
 * @property string|null $short_name
 *
 * @package App\Models
 */
class LocCountry extends Model
{
	protected $table = 'loc_country';
	protected $primaryKey = 'country_id';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'short_name'
	];
}
