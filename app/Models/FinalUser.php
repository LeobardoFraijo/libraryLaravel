<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalUser extends Model
{
    use HasFactory;

    //Many to one relationship with FinalUserType Model
    public function final_user_types(){
        return $this->belongsTo(FinalUserType::class);
    }

    //One to many relationship with penalty Model
    public function penalties(){
        return $this->hasMany(Penalty::class);
    }

    //One to many relationship with BookOrder Model
    public function book_orders(){
        return $this->hasMany(BookOrder::class);
    }

    //One to many relationship with Devolution Model
    public function devolutions(){
        return $this->hasMany(Devolution::class);
    }
}
