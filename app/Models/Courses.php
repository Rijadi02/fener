<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;


    public function lectures()
    {
        return $this->hasMany(Lectures::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'teachers_id','id');
    }
}

