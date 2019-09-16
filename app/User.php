<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'salutation', 'firstname', 'prefix', 'lastname', 'email', 'password', 'postal_code', 'house_number', 'suffix', 'street_name',
        'city', 'country', 'phone_number', 'phone_number_2', 'birth_date', 'registered_ip', 'rank',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
