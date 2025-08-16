<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
    public function performance()
    {
        return view('user.performance');
    }
    public function opportunities()
    {
        return view('user.opportunities');
    }
    public function help()
    {
        return view('user.help');
    }
    public function settings()
    {
        return view('user.settings');
    }
    public function feedback()
    {
        return view('user.feedback');
    }
    public function about()
    {
        return view('user.about');
    }
}
