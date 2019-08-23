<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    	// dump($request->all());
    	if(Auth::guard('web')->attempt(['email'=>$request->email, 'password'=>$request->password]))
    	{
    		dump(Auth::guard('web')->user()->only(['name','api_token']));
    	}
    }


}
