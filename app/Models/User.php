<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'tabel',
        'name',
        'password',
        'lastname',
        'email',
        'position',
        'organization',
        'language_code',
        'phone',
        'is_active',
        'created_by',
        'updated_by',
        'deleted_by' 
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    public function profile(){
        return $this->hasOne(Profile::class,'user_id','id');
    }

    public function applications(){
        return $this->hasMany(Application::class,'user_id','id');
    }

    public function companies(){
        return $this->belongsTo(Company::class,'company_user','company_id','user_id','id','id');
    }
}
