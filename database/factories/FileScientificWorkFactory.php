<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\FileScientificWork;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileScientificWorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FileScientificWork::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, count(User::pluck("id"))),
            'file_id' => rand(1, count(File::pluck("id")))
        ];
    }
}
