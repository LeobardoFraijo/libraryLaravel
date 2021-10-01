<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devolution extends Model
{
    use HasFactory;

    //many to one relationship with FinalUser Model
    public function final_user(){
        return $this->belongsTo(FinalUser::class);
    }

    //Many to many relationship with Copy Model
    public function copies(){
        return $this->belongsToMany(Copy::class);
    }
}
