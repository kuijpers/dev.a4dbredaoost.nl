<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\BoardmemberResetPasswordNotification;

class Boardmember extends Authenticatable
{
    use Notifiable;

    protected $guard = 'boardmember';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'secondary_email',
        'password',
        'address',
        'postcode',
        'city',
        'country',
        'phone',
        'boardmember_title',
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
        $this->notify(new BoardmemberResetPasswordNotification($token));
    }

}
