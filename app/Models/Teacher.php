<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //use HasFactory;

    public function thing(){
        return $this->belongsTo(Thing::class, 'id_things');
    }
}
