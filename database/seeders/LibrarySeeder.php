<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Library;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Library::factory()->count(4)->create();
    }
}
