<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    //One to many relationship with Bookshelf Model
    public function bookshelves(){
        return $this->hasMany(Bookshelf::class);
    }
}
