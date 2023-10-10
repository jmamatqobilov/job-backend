<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'firstname',
        'username',
        'lastname',
        'middlename',
        'date_of_birth',
        'nationality_id',
        'region_id',
        'district_id',
        'address',
        'place_of_birth',
        'citizenship',
        'contact_phone',
        'contact_phone_2',
        'email',
        'driver_licence_number',
        'has_car',
        'hobby',
        'strengths',
        'criminal_responsibility',
        'attending_court',
        'created_by',
        'gender',
        'work_experience',
        'education',
        'languages',
        'recommandations',
        'relative_employees',
        'recommender_employees',
        'skills'
    ];
}
