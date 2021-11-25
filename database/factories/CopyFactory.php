<?php

namespace Database\Factories;

use App\Models\Copy;
use App\Models\CopyStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class CopyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Copy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'loan_days' => $this->faker->numberBetween(5, 10),
            'code' => $this->faker->randomLetter().strval($this->faker->randomNumber(5)),
            'book_id' => $this->faker->numberBetween(1, 50),
            'bookshelf_id' => $this->faker->numberBetween(1, 50),
            'copy_status_id' => $this->faker->numberBetween(1, 3)
        ];
    }
}
