<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
//    use HasFactory;

    public function teacher(){
        return $this->hasMany(Teacher::class);
    }

    public function term_papers(){
        return $this->hasMany(Term_paper::class);
    }
}
