<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'name',
        'description',
        'longitude',
        'latitude',
        'status',
        'links',
        'phone',
        'region_id',
        'district_id',
        'created_by'
    ];



    public function vacancies(){
        return $this->hasMany(Vacancy::class,'company_id','id');
    }

    public function region(){
        return $this->belongsTo(Region::class,'region_id','id');
    }

    public function users(){
        return $this->belongsTo(User::class,'company_user','company_id','user_id','id','id');
    }
}
