<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Sentinel;
use Session;//dibagian use   
class UserController extends Controller
{
   
   
 
    
    public function signup()
    {
        return view('Signup');
    }
    
    public function signup_store(UserRequest $request)
    {
        $user=Sentinel::registerAndActivate($request->All());
        if($request->last_name!="admin")
        {
            $role=Sentinel::findRoleByName("user");
            $user->roles()->attach($role);
        }
        else
        {
            $role=Sentinel::findRoleByName("admin");
            $user->roles()->attach($role);
        }
     
        return view('Halamanutama');
    
    }
    
}
