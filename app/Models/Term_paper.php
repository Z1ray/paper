<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term_paper extends Model
{
    public function thing(){
        return $this->belongsTo(Thing::class, 'id_things');
    }
}
