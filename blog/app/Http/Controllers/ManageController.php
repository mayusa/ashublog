<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function dashboard(){
    	return view('manage.dashboard');
    }
}
