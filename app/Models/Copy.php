<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;

    //many to one relationship with CopyStatus model    
    public function copy_status(){
        return $this->belongsTo(CopyStatus::class);
    }

    //Many to many relationship with BookOrder model
    public function book_orders(){
        return $this->belongsToMany(BookOrder::class);
    }

    //Many to many relationship with Devolution model
    public function devolutions(){
        return $this->belongsToMany(Devolution::class);
    }

    //Many to one relationship with Book model
    public function book(){
        return $this->belongsTo(Book::class);
    }

    //Many to one relationship with Bookshelf model
    public function bookshelves(){
        return $this->belongsTo(Bookshelf::class);
    }
}
