<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;


    public function lecture()
    {
        return $this->belongsTo(Lectures::class,'lecture_id','id');
    }


    public function submissions()
    {
        return $this->belongsToMany(User::class);
    }

}
