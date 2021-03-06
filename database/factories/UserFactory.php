<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'middlename' => $this->faker->text(5),
            'username' => $this->faker->userName(),
            'email' => $this->faker->safeEmail(),
            'external_id' => $this->faker->uuid(),
            'password' => $this->faker->password(),
            'api_token' => Str::random(60),
        ];
    }
}
