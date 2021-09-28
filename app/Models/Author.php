<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeUnit\FunctionUnit;

class Author extends Model
{
    use HasFactory;

    //Many to many relationship with Book Model
    public function books(){
        return $this->belongsToMany(Book::class);
    }
}
