<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'designation',
        'primary_contact',
        'secondary_contact',
        'email',
        'username',
        'password',
        'date_of_birth',
        'date_of_hired'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function designation(){
      return $this->hasOne('App\UserRole','role_id','designation');
    }

}
