<?php

namespace Database\Seeders;

use App\Models\FinalUser;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(BooksSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FinalUserSeeder::class);
        $this->call(PenaltySeeder::class);
        $this->call(LibrarySeeder::class);
        $this->call(BookshelfSeeder::class);
        $this->call(CopySeeder::class);
        $this->call(BookOrderSeeder::class);
    }
}
