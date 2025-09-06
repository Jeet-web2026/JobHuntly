<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'profile',
        'email',
        'contact_no',
        'gender',
        'last_qualification',
        'last_qualification_organisation',
        'current_city',
        'birth_date',
        'user_id'
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFullQualificationAttribute()
    {
        return $this->last_qualification . ', ' . $this->last_qualification_organisation;
    }
}
