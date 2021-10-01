<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CopyStatus extends Model
{
    use HasFactory;

    //one to many relationship with Copy model
    
    public function copies(){
        return $this->hasMany(Copy::class);
    }
}
