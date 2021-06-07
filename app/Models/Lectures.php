<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lectures extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Courses::class,'courses_id','id');
    }


    public function homeworks()
    {
        return $this->hasMany(Homework::class);
    }
}
