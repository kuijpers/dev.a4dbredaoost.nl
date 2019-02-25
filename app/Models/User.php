<?php

namespace App\Models;

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
        					'name',
							'slug',
							'email',
        					'password',
							'address',
							'postcode',
							'city',
							'phone',
							'dob',
    						];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        					'password',
        					'remember_token',
    						];

	protected $table = 'users';
}
