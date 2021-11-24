<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$this->call(UserSeeder::class);
        $this->call(FileSeeder::class);
        $this->call(ScientificWorkSeeder::class);*/
     //   $this->call(FileScientificWorkSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ScientificWorkSeeder::class);
    }
}
