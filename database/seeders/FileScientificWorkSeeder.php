<?php

namespace Database\Seeders;

use App\Models\FileScientificWork;
use Illuminate\Database\Seeder;

class FileScientificWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FileScientificWork::factory(10)->create();
    }
}
