<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserprofessionalrequestRule;
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

    public function editprofile()
    {
        $currentUserData = UserDetails::where('user_id', Auth::id())->first();
        return view('user.edit-profile', compact('currentUserData'));
    }

    public function editprofileSave(Request $request)
    {
        $requestedData = $request->validate([
            'full-name' => 'string|required|min:3|max:100',
            'last-qualification' => 'string|required',
            'email-address' => 'email|required',
            'tel-number' => 'required|digits:10|numeric',
            'gender' => 'string|required',
            'city' => 'string|required',
            'dob' => 'date|required',
        ], [
            'full-name.string' => 'Full Name must be string',
            'full-name.required' => 'Full Name is required',
            'full-name.min' => 'Full Name must be at least 3 characters',
            'full-name.max' => 'Full Name must not exceed 100 characters',
            'last-qualification.string' => 'Last Qualification must be string',
            'last-qualification.required' => 'Last Qualification is required',
            'email-address.email' => 'Email Address must be a valid email address',
            'email-address.required' => 'Email Address is required',
            'tel-number.required' => 'Contact Number is required',
            'tel-number.digits' => 'Contact Number must be 10 digits',
            'tel-number.numeric' => 'Contact Number must be numeric',
            'gender.string' => 'Gender Must be a String',
            'gender.required' => 'Please select your gender type',
            'city.string' => 'Current City must be string',
            'city.required' => 'Current City is required',
            'dob.date' => 'Birth Date must be a valid date',
            'dob.required' => 'Birth Date is required',
        ]);

        $nameparts = explode(' ', $requestedData['full-name'], 2);
        $first_name = $nameparts[0];
        $last_name = isset($nameparts[1]) ? $nameparts[1] : '';

        $dataSave = UserDetails::create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $requestedData['email-address'],
            'contact_no' => $requestedData['tel-number'],
            'gender' => $requestedData['gender'],
            'last_qualification' => $requestedData['last-qualification'],
            'current_city' => $requestedData['city'],
            'birth_date' => $requestedData['dob'],
            'user_id' => Auth::id(),
        ]);

        if ($dataSave) {
            return redirect()->route('user.editprofessional-details')
                ->with('success', 'Personal details saved successfully!');
        } else {
            return back()->withInput()
                ->with('error', 'Failed to save personal details. Please try again.');
        }
    }

    public function editeProfessionalDetails()
    {
        $currentUserData = UserDetails::where('user_id', Auth::id())->first();
        if (!empty($currentUserData)) {
            return view('user.edit-professional-details', compact('currentUserData'));
        } else {
            return redirect()->route('user.editprofile')
                ->with('error', 'Please fill the Personal details first.');
        }
    }

    public function saveeProfessionalDetails(UserprofessionalrequestRule $request)
    {
        $requestedData = $request->validated();
    }
}
