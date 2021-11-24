<?php

namespace Database\Factories;

use App\Models\ScientificWork;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScientificWorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ScientificWork::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::first();
        return [
            'summary' => $this->faker->realText(),
            'published_at' => $this->faker->date(),
            'user_id' => $user_id['id'],
        ];
    }
}
