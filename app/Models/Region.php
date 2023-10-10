<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'name',
        'parent_id',
        'created_at',
        'updated_at'
    ];

    public function parent()
    {
        return $this->belongsTo(self::class);
    }

    
}
