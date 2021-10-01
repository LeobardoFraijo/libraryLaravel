<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookshelf extends Model
{
    use HasFactory;

    //many to one relationship with Bookshelf Model
    public function area(){
        return $this->belongsTo(Area::class);
    }

    //many to one relationship with Bookshelf Model
    public function library(){
        return $this->belongsTo(Library::class);
    }

    //One to many relationship with Copy Model
    public function copies(){
        return $this->hasMany(Copy::class);
    }
}
