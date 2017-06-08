<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
   	protected $table='partner';

	protected $fillable = [
		'organization_id',
		'designation_id',
		'last_name',
		'first_name',
		'primary_contact',
		'secondary_contact',
		'email',
		'birthday'
	];

	public function partnerdesignation()
	{
		return $this->hasOne('App\PartnerDesignation','organization_id','organization_id');
	}

	public function partnerorganization(){
		return $this->hasOne('App\PartnerOrganization','organization_id','organization_id');
	}
}
