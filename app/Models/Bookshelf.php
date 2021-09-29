<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookshelf extends Model
{
    use HasFactory;

    //One to many relationship with Bookshelf Model
    public function area(){
        return $this->BelongsTo(Area::class);
    }

    public function library(){
        return $this->BelongsTo(Library::class);
    }
}
