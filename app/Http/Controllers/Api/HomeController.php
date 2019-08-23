<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:api');
    }

    public function index()
    {
    	return view('home');
    }
}
