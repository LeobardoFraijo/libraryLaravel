<?php

namespace Database\Seeders;

use App\Models\FinalUser;
use Illuminate\Database\Seeder;
use App\Models\FinalUserType;

class FinalUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //adding final_user_types
        $userType = new FinalUserType();
        $userType->name = "Alumno";
        $userType->save();

        $userType2 = new FinalUserType();
        $userType2->name = "Maestro";
        $userType2->save();

        //creating 10 finalUsers
        FinalUser::factory()->count(10)->create();
    }
}
