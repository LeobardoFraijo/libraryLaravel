<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Bookshelf;
use App\Models\Library;
use Illuminate\Database\Seeder;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeding areas
        $area = new Area();
        $area->name = "Matemáticas";
        $area->save();

        $area2 = new Area();
        $area2->name = "Física";
        $area2->save();

        $area3 = new Area();
        $area3->name = "Historia";
        $area3->save();

        $area4 = new Area();
        $area4->name = "Sistemas";
        $area4->save();

        $area5 = new Area();
        $area5->name = "Literatura";
        $area5->save();

        $area6 = new Area();
        $area6->name = "Química";
        $area6->save();

        $area2 = new Area();
        $area2->name = "Filosofía";
        $area2->save();
        
        Bookshelf::factory()->count(50)->create();
    }
}
