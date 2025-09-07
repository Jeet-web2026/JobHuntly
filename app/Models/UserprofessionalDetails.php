<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserprofessionalDetails extends Model
{
    protected $fillable = [
        'user_id',
        'preffered_job_type',
        'availibility_to_work',
        'preffered_location',
        'skills',
        'designation',
        'date_from',
        'date_to',
        'roles_responsibilities',
    ];

    protected $casts = [
        'designation' => 'array',
        'date_from' => 'array',
        'date_to' => 'array',
        'roles_responsibilities' => 'array'
    ];
}
