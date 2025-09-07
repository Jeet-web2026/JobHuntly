<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserprojectsDetails extends Model
{
    protected $fillable = [
        'project_name',
        'project_url',
        'start_date',
        'end_date',
        'project_details',
        'is_currently_working',
        'user_id',
    ];

    protected $casts = [
        'project_name' => 'array',
        'project_url' => 'array',
        'start_date' => 'array',
        'end_date' => 'array',
        'project_details' => 'array',
    ];
}
