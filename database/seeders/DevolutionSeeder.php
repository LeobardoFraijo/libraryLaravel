<?php

namespace Database\Seeders;

use App\Models\Devolution;
use Illuminate\Database\Seeder;

class DevolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devolutions = Devolution::factory()->count(4)->create();

        //each devolution may have 1 or 2 copies
        foreach($devolutions as $devolution){
            $percentage = rand(1, 4);
            $created_at = date("Y-m-d h:i:s");
            if($percentage <= 2){
                $copy = rand(1, 100);
                
                $devolution->copies()->attach([
                    $copy => 
                        ['created_at' => $created_at] 
                ]);
            }else{
                $copy = rand(1, 100);
                $copy2 = rand(1, 100);
                $devolution->copies()->attach([
                    $copy => [
                        'created_at' => $created_at
                    ],
                    $copy => [
                        'created_at' => $created_at
                    ]
                ]);
            }
        }
    }
}
