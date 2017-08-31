<?php

namespace App\Http\Controllers;

use Plank\Mediable\Media;

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

    public function media()
    {
        $images = Media::orderBy('created_at', 'desc')->get();

        return view('manage.media-manager', compact('images'));
    }

    public function users()
    {
        return view('manage.users.index');
    }
}
