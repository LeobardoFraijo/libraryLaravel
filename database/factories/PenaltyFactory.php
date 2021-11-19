<?php

namespace Database\Factories;

use App\Models\Penalty;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenaltyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penalty::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text(300),
            'amount' => $this->faker->randomFloat(2, 0, 200),
            'user_id' => rand(1, 5),
            'penalty_type_id' => rand(1, 3),
            'final_user_id' => rand(1, 10),
            'penalty_status_id' => rand(1, 3)
        ];
    }
}
