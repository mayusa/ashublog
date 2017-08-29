<?php

namespace App\Http\Controllers;

class ManageController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return redirect()->route('manage.dashboard');
    }

    public function dashboard()
    {
        return view('manage.dashboard');
    }

    public function users()
    {
        return view('manage.users.index');
    }
}
