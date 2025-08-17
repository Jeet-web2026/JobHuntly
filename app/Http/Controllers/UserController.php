<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
    public function performance()
    {
        $userData = User::with('details')->first();
        return view('user.performance', compact('userData'));
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
