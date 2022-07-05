<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable= [
        'id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone_number',
         'id_number',
         'passport_number',
         'agent_name',
         'agent_phone_number',
         'guardian_name',
         'guardian_phone_number',
         'country',
         'city',
         'postal_code',
         'male_occupation',
         'female_occupation',
         'gender'
    ];
}
