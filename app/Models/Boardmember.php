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
							'slug',
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
        					'profile_img',
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

	protected $table = 'boardmembers';


    // Send notification to reset password
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new BoardmemberResetPasswordNotification($token));
    }


	public function roles()
	{
		return $this->belongsToMany(Role::class, 'boardmembers_roles');
	}

	/**
	 * Checks if Boardmember has access to $permissions.
	 */
	public function hasAccess(array $permissions)
	{
		// check if the permission is available in any role
		foreach ($this->roles as $role) {
			if($role->hasAccess($permissions)) {
				return true;
			}
		}
		return false;
	}

	/**
	 * Checks if the user belongs to role.
	 */
	public function inRole(string $roleSlug)
	{
		return $this->roles()->where('slug', $roleSlug)->count() == 1;
	}


}
