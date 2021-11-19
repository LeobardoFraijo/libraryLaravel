<?php

namespace Database\Factories;

use App\Models\BookType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

class BookTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(rand(1, 5), true)
        ];
    }
}
