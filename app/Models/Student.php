<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function sinfs(){
        return $this->belongsToMany(Sinf::class);
    }
}
