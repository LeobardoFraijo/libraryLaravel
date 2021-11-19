<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\BookType;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    

    public function definition()
    {
        

        return [
            'name' => $this->faker->words(rand(1, 8), true),
            'publisher' => $this->faker->words(rand(1, 4), true),
            'publication_date' => $this->faker->date(),
            'book_type_id' => BookType::all()->random()->id
        ];
    }
}
