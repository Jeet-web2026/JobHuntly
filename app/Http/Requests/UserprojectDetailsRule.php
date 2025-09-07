<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserprojectDetailsRule extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'projects-name' => 'array|required|max:255',
            'projects-name.*' => 'required|max:255',
            'projects-url' => 'array|url|required|max:255',
            'projects-url.*' => 'required|url|max:255',
            'start-date' => 'array|required|date',
            'start-date.*' => 'date|required',
            'end-date' => 'array|required|date',
            'end-date.*' => 'date|required',
            'description' => 'array|required|max:1000',
            'description.*' => 'required|max:1000',
        ];
    }

    public function messages(): array
    {
        return [
            'projects-name.required' => 'Project name is required',
            'projects-name.max' => 'Project name maximum length is 255 characters',
            'projects-name.*.required' => 'Project name is required',
            'projects-name.*.max' => 'Project name must not exceed 255 characters',
            'projects-url.required' => 'Project URL required',
            'projects-url.url' => 'Project URL must be a valid URL',
            'projects-url.max' => 'Project URL max 255 characters long',
            'projects-url.*.required' => 'Project URL are required',
            'projects-url.*.url' => 'Project URL must be a valid URL',
            'projects-url.*.max' => 'Project URL must not exceed 255 characters',
            'start-date.required' => 'Start date is required',
            'start-date.*.required' => 'Start date is required',
            'start-date.*.date' => 'Start date must be a valid date',
            'end-date.*.date' => 'End date must be a valid date',
            'description.required' => 'Project details are required',
            'description.*.required' => 'Project details are required',
            'description.*.max' => 'Project details must not exceed 1000 characters',
        ];
    }
}
