<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function providerLogin($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function providerAuthentication($provider)
    {
        $userDetails = Socialite::driver($provider)->user();

        $existingUser = User::where('email', $userDetails->email)->first();

        if ($existingUser) {
            $authentication = $existingUser->update([
                'google_id'         => $userDetails->id,
                'google_profile'    => $userDetails->avatar,
                'email_verified_at' => now(),
            ]);

            if($authentication){
                auth()->login($existingUser);
                return redirect()->route('home')->with('success', 'Loggedin Successfully!');
            }
        } else {
            $success = User::create([
                'email'             => $userDetails->email,
                'nick_name'         => $userDetails->nickname ?? null,
                'name'              => $userDetails->name,
                'google_id'         => $userDetails->id,
                'google_profile'    => $userDetails->avatar,
                'email_verified_at' => now(),
                'password'          => rand(111111, 999999),
            ]);
            if ($success) {
                return redirect()->route('user.login')->with('success', 'Now you can login!');
            }
        }
    }


    public function authLogout()
    {
        $user = User::find(Auth::user()->id);
        $user->email_verified_at = null;
        $user->save();

        Auth::guard('web')->logout();
        return back()->with('success', 'Logout Successfully!');
    }
}
