<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PartnerLocator
 * 
 * @property int $id
 * @property string $company
 * @property string $status
 * @property string $logo
 * @property string $address
 * @property string $website
 * @property string $phone
 * @property string $countries_covered
 * @property string $states_covered
 *
 * @package App\Models
 */
class PartnerLocator extends Model
{
	protected $table = 'partner_locator';
	public $timestamps = false;

	protected $fillable = [
		'company',
		'status',
		'logo',
		'address',
		'website',
		'phone',
		'countries_covered',
		'states_covered'
	];
}
