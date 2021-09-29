<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenaltyStatus extends Model
{
    use HasFactory;

    //One to many relationship with penalty Model
    public function penalties(){
        return $this->hasMany(Penalty::class);
    }
}
