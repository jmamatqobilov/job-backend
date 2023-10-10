<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'name',
        'company_id',
        'description',
        'tasks',
        'requirements',
        'conditions',
        'schedule',
        'start_date',
        'end_date',
        'status',
        'tags',
        'job_type',
        'working_type',
        'salary',
        'created_by',
        'updated_by',
    ];




    public function company(){
        return $this->belongsTo(Company::class,'company_id','id');
    }

    public function applications(){
        return $this->hasMany(Application::class,'vacancy_id','id');
    }
}
