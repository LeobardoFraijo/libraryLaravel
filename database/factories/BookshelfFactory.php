<?php

namespace Database\Factories;

use App\Models\Bookshelf;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

class BookshelfFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bookshelf::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'localization' => $this->faker->address(),
            'code' => $this->faker->randomLetter().strval($this->faker->randomNumber(5)),
            'area_id' => rand(1, 7),
            'library_id' => rand(1, 4)
        ];
    }
}
