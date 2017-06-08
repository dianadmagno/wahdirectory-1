<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerOrganization extends Model
{
    
    protected $table='partner_organization';

	protected $fillable = [
		'organization'
	];

}
