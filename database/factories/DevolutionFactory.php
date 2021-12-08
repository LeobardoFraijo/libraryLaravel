<?php

namespace Database\Factories;

use App\Models\Devolution;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DevolutionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Devolution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'final_user_id' => $this->faker->numberBetween(1, 10),
            'created_at' => date("Y-m-d h:i:s")
        ];
    }
}
