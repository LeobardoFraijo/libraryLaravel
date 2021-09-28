<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //Many to many relationship with Author Model
    public function authors(){
        return $this->belongsToMany(Author::class);
    }

    //Many to one relationship with Booktype Model
    public function booktype(){
        return $this->belongsTo(BookType::class);
    }
}
