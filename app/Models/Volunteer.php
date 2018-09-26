<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\VolunteerResetPasswordNotification;

class Volunteer extends Authenticatable
{
    use Notifiable;

    protected $guard = 'volunteer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
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
    // Send notification to reset password
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new VolunteerResetPasswordNotification($token));
    }
}
