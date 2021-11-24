<?php

namespace Database\Seeders;

use App\Models\ScientificWork;
use Illuminate\Database\Seeder;

class ScientificWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ScientificWork::factory(10)->create([
           // 'user_id' => 1
        ]);
    }
}
