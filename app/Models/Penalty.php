<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penalty extends Model
{
    use HasFactory;

    //many to one relationship with PenaltyStatus Model
    public function penalty_status(){
        return $this->BelongsTo(PenaltyStatus::class);
    }

    //many to one relationship with PenaltyType Model
    public function penalty_type(){
        return $this->BelongsTo(PenaltyType::class);
    }

    //many to one relationship with FinalUser Model
    public function final_user(){
        return $this->BelongsTo(FinalUser::class);
    }

    //many to one relationship with User Model
    public function user(){
        return $this->BelongsTo(User::class);
    }
}
