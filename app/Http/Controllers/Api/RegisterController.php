<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    //
    protected $redirectTo = '/home';

    public function __construct()
    {

    }

    public function register(Request $request)
    {
    	// $this->validate($request, [
    	// 	'name'=>'required|string|max:100',
    	// 	'email'=>'required|email|max:100',
    	// 	'password'=>'required|min:6'
    	// ]); 

    	$validator = Validator::make($request->all(), [
            'name'=>'required|string|max:100',
    		'email'=>'required|email|unique:users|max:100',
    		'password'=>'required|min:6'
        ]);

        if ($validator->fails()) {
            // return redirect('post/create')
            //             ->withErrors($validator)
            //             ->withInput();

            return response()->json($validator->errors(),422);
        }



    	$user = User::create([

    				'name'		=>	$request->name,
    				'email'		=>	$request->email,
    				'password'	=>	bcrypt($request->password),
    				'api_token'	=>	Str::random(60),
    			]);


    	if($user)
    	{
    		return response()->json(['success'=>$user],200);
    	}

    }

}
