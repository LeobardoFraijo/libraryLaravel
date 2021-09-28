<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //Many to many relationship with User Model
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
