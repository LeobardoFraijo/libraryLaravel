<?php

namespace Database\Factories;

use App\Models\FinalUser;
use App\Models\FinalUserType;

use Illuminate\Database\Eloquent\Factories\Factory;

class FinalUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FinalUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'phone_number' => $this->randomPhone(),
            'email' => $this->faker->email(),
            'final_user_type_id' => rand(1,2)
        ];
    }

    public function randomPhone(){
        $phone = "";
        for($i = 0; $i < 10; $i++ ){
            $random = rand(0, 9);
            $phone = $phone.strval($random);
        }
        return $phone;   
    }
}
