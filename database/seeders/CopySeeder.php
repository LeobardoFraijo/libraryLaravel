<?php

namespace Database\Seeders;

use App\Models\Copy;
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
        Copy::factory()->count(100)->create();
    }
}
