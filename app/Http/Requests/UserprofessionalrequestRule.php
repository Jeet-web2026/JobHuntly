<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserprofessionalrequestRule extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'preffered-job-type' => 'required',
            'availibility-to-work' => 'required',
            'preffered-location' => 'required',
            'skills' => 'required',
            'designation .*' => 'required',
            'designation' => 'array|required|min:1',
            'date-from .*' => 'date|required',
            'date-from' => 'array|required|min:1',
            'date-to .*' => 'date|required|after_or_equal:date-from.*',
            'date-to' => 'array|required|min:1',
            'roles-responsibilities .*' => 'required',
            'roles-responsibilities' => 'array|required|min:1',
        ];
    }

    public function messages(): array
    {
        return [
            'preffered-job-type.required' => 'Preffered Job Type is required',
            'availibility-to-work.required' => 'Availibility To Work is required',
            'preffered-location.required' => 'Preffered Locations are required',
            'skills.required' => 'Skills are required',

            'designation.required'   => 'Designation is required',
            'designation.array'      => 'Designation must be array',
            'designation.min'        => 'At least one designation is required',
            'designation.*.required' => 'Designation is required',

            'date-from.required'   => 'Date From is required',
            'date-from.array'      => 'Date From must be array',
            'date-from.min'        => 'At least one Date From is required',
            'date-from.*.required' => 'Date From is required',
            'date-from.*.date'     => 'Date From must be date',

            'date-to.required'   => 'Date To is required',
            'date-to.array'      => 'Date To must be array',
            'date-to.min'        => 'At least one Date To is required',
            'date-to.*.required' => 'Date To is required',
            'date-to.*.date'     => 'Date To must be date',

            'roles-responsibilities.required'   => 'Roles & Responsibilities is required',
            'roles-responsibilities.array'      => 'Roles & Responsibilities must be array',
            'roles-responsibilities.min'        => 'At least one Roles & Responsibilities is required',
            'roles-responsibilities.*.required' => 'Roles & Responsibilities is required',
        ];
    }
}
