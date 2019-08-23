<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StudentController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth:api');
	}


    public function index()
    {
    	if(Gate::allows('view-students'))
    	{
    		return response()->json(Student::all(),200);
    	}
    	return response()->json(['error'=>'sorry, you have no sufficient previledge'], 401);
    	
    }

    // public function create()
    // {

    // }

    public function store()
    {
    	
    }

    public function edit()
    {
    	
    }

    public function update()
    {
    	
    }
}
