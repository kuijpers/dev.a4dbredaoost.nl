<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{

	use SoftDeletes;

	protected $table = 'roles';

	protected $fillable 	= [
								'name',
								'slug',
								'permissions',
								'description',
							];
	protected $casts 		= [
								'permissions' => 'array',
							];


//	public function users()
//	{
//		return $this->belongsToMany(User::class, 'roles_users');
//	}
//
//
//	public function volunteers()
//	{
//		return $this->belongsToMany(Volunteer::class, 'roles_volunteers');
//	}


	public function boardmembers()
	{
		return $this->belongsToMany(Boardmember::class, 'boardmembers_roles');
	}

	public function hasAccess(array $permissions)
	{
		foreach ($permissions as $permission) {
			if ($this->hasPermission($permission))
				return true;
		}
		return false;
	}

	private function hasPermission($permission)
	{
		return $this->permissions[$permission]?$this->permissions[$permission]: false;
	}


}
