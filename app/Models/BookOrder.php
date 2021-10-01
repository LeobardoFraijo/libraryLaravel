<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookOrder extends Model
{
    use HasFactory;

    //many to one relationship with OrderStatus model
    public function order_status(){
        return $this->belongsTo(OrderStatus::class);
    }  
    
    //many to one relationship with FinalUser model
    public function final_user(){
        return $this->belongsTo(FinalUser::class);
    } 

    //Many to many relationship with Copy model
    public function copies(){
        return $this->belongsToMany(Copy::class);
    }

}
