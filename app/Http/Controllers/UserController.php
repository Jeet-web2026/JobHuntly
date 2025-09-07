<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserprofessionalrequestRule;
use App\Http\Requests\UserprojectDetailsRule;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\UserprofessionalDetails;
use App\Models\UserprojectsDetails;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): view
    {
        return view('user.dashboard');
    }
    public function performance(): view
    {
        $userData = User::with('details')->first();
        return view('user.performance', compact('userData'));
    }
    public function opportunities(): view
    {
        return view('user.opportunities');
    }
    public function help(): view
    {
        return view('user.help');
    }
    public function settings(): view
    {
        return view('user.settings');
    }
    public function feedback(): view
    {
        return view('user.feedback');
    }
    public function about(): view
    {
        return view('user.about');
    }

    public function editprofile(): view
    {
        $currentUserData = UserDetails::where('user_id', Auth::id())->first();
        return view('user.edit-profile', compact('currentUserData'));
    }

    public function editprofileSave(Request $request): RedirectResponse
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

        $dataSave = UserDetails::updateOrcreate([
            'user_id' => Auth::id(),
        ], [
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

    public function editeProfessionalDetails(): RedirectResponse|view
    {
        $currentUserData = UserDetails::where('user_id', Auth::id())->first();
        if (!empty($currentUserData)) {
            $currentUserProfessionalData = UserprofessionalDetails::where('user_id', Auth::id())->first();
            return view('user.edit-professional-details', compact('currentUserProfessionalData'));
        } else {
            return redirect()->route('user.editprofile')
                ->with('error', 'Please fill the Personal details first.');
        }
    }

    public function saveeProfessionalDetails(UserprofessionalrequestRule $request): RedirectResponse
    {
        $requestedData = $request->validated();
        $result = UserprofessionalDetails::updateOrcreate(
            [
                'user_id' => Auth::id(),
            ],
            [
                'user_id' => Auth::id(),
                'preffered_job_type' => $requestedData['preffered-job-type'],
                'availibility_to_work' => $requestedData['availibility-to-work'],
                'preffered_location' => $requestedData['preffered-location'],
                'skills' => $requestedData['skills'],
                'designation' => $requestedData['designation'],
                'date_from' => $requestedData['date-from'],
                'date_to' => $requestedData['date-to'],
                'roles_responsibilities' => $requestedData['roles-responsibilities'],
            ]
        );

        if ($result) {
            return redirect()->route('user.projects-details')
                ->with('success', 'Professional details saved successfully!');
        } else {
            return back()->withInput()
                ->with('error', 'Failed to save professional details. Please try again.');
        }
    }

    public function userProjectDetails(): View
    {
        return view('user.projects-details');
    }

    public function userProjectDetailsSave(UserprojectDetailsRule $request): RedirectResponse
    {
        $requestedData = $request->validated();
        $result = UserprojectsDetails::updateOrcreate([
            'user_id' => Auth::id(),
        ], [
            'user_id' => Auth::id(),
            'project_name' => $requestedData['projects-name'],
            'project_url' => $requestedData['projects-url'],
            'start_date' => $requestedData['start-date'],
            'end_date' => $requestedData['end-date'],
            'project_details' => $requestedData['description'],
            'is_currently_working' => $requestedData['project-status'] ?? null,
        ]);

        if ($result) {
            return back()->with('success', 'Projects added successfully!');
        } else {
            return back()->withInput()
                ->with('error', 'Failed to add projects. Please try again.');
        }
    }
}
