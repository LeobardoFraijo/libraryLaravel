<?php

namespace Database\Seeders;

use App\Models\Copy;
use App\Models\CopyStatus;
use Illuminate\Database\Seeder;

class CopySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $copyStatus = new CopyStatus();
        $copyStatus->name = "disponible";
        $copyStatus->save();

        $copyStatus2 = new CopyStatus();
        $copyStatus2->name = "prestado";
        $copyStatus2->save();

        $copyStatus3 = new CopyStatus();
        $copyStatus3->name = "extraviado";
        $copyStatus3->save();

        Copy::factory()->count(100)->create();
    }
}
