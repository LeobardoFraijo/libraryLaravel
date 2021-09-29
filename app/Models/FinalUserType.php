<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalUserType extends Model
{
    use HasFactory;

    //One to many relationship with FinalUser Model
    public function final_users(){
        return $this->hasMany(FinalUser::class);
    }
}
