<?php

namespace App\Models;

use Carbon\Carbon;
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
        'birth_date'
    ];

    public function setBirthDateAttribute($value)
    {
        $this->attributes['birth_date'] = Carbon::createFromDate('d-m-Y', $value)->format('Y-m-d');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFullQualificationAttribute()
    {
        return $this->last_qualification . ', ' . $this->last_qualification_organisation;
    }
}
