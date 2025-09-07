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

    public function saveeProfessionalDetails(Request $request): void
    {
        $validatedData = $request->validate([
            'designation' => 'required|array|min:1',
            'designation.*' => 'string|min:2|max:100',
            'date-from' => 'required|array|min:1',
            'date-from.*' => 'date',
            'date-to' => 'required|array|min:1',
            'date-to.*' => 'date|after_or_equal:date-from.*',
            'working-status' => 'sometimes|array',
            'working-status.*' => 'in:1',
            'roles-responsibilities' => 'required|array|min:1',
            'roles-responsibilities.*' => 'string|min:10|max:1000',
        ], [
            'designation.required' => 'Designation is required',
            'designation.array' => 'Designation must be an array',
            'designation.min' => 'At least one designation entry is required',
            'designation.*.string' => 'Each designation must be a string',
            'designation.*.min' => 'Each designation must be at least 2 characters',
            'designation.*.max' => 'Each designation must not exceed 100 characters',

            'date-from.required' => '"From" date is required',
            'date-from.array' => '"From" date must be an array',
            'date-from.min' => 'At least one "From" date entry is required',
            'date-from.*.date' => 'Each "From" date must be a valid date',

            'date-to.required' => '"To" date is required',
            'date-to.array' => '"To" date must be an array',
            'date-to.min' => 'At least one "To" date entry is required',
            'date-to.*.date' => 'Each "To" date must be a valid date',
            'date-to.*.after_or_equal' => '"To" date must be after or equal to the corresponding "From" date',

            'working-status.sometimes' => '"Currently Working" status is optional',
            'working-status.array' => '"Currently Working" status must be an array if provided',
            'working-status.*.in' => '"Currently Working" status value is invalid',

            'roles-responsibilities.required' => 'Roles & Responsibilities is required',
            'roles-responsibilities.array' => 'Roles & Responsibilities must be an array',
            'roles-responsibilities.min' => 'At least one Roles & Responsibilities entry is required',
            'roles-responsibilities.*.string' => 'Each Roles & Responsibilities entry must be a string',
            'roles-responsibilities.*.min' => 'Each Roles & Responsibilities entry must be at least 10 characters',
            'roles-responsibilities.*.max' => 'Each Roles & Responsibilities entry must not exceed 1000 characters',
        ]);
    }
}
