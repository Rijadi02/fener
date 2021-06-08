<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    use HasFactory;

    public function lecture()
    {
        return $this->belongsTo(Lectures::class,'lecture_id','id');
    }
}
