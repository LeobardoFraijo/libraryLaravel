<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    //one to many relationship with BookOrder model    
    public function book_orders(){
        return $this->hasMany(BookOrder::class);
    }
}
