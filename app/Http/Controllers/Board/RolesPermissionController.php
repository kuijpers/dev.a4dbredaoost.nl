<?php

namespace App\Http\Controllers\Board;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class RolesPermissionController extends Controller
{

	public function CanAccessAs($AccessAllowed){

		// $AccessAllowedArray check if array or not
		if(is_array($AccessAllowed)){

				// Split up the array in variable chunks

				foreach($AccessAllowed as $AccessLevel){
					// Make slug out of each variable
					$AccessLevel = str_slug($AccessLevel);
					// Check if variable is in array
					if(in_array($AccessLevel, $this->CreateUserRolesArray())){
						return true;
					}

				}

				return false;
		}else{

			// Make slug of variable

				$AccessAllowed = str_slug($AccessAllowed);

			// Check if variable is in array of roles
				if(in_array($AccessAllowed, $this->CreateUserRolesArray())){
					return true;
				}

				return false;
		}


		return false;

	}

	public function HasPermissionTo(){


	}

	private function CreateUserRolesArray(){
		// Start with an empty array
		$RolesArray = [];

		// Get the user roles as slug variables and make a new array of them
		foreach (Auth::user()->roles as $role){

			$RolesArray[] = $role['slug'];

		}

		return $RolesArray;

	}

}
