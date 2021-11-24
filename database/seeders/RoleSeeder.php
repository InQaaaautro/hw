<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = new Role();
        $manager->name = 'Administrator';
        $manager->slug = 'admin';
        if (!Role::where(['slug' => 'admin'])->first()) {
            $manager->save();
        }

        $developer = new Role();
        $developer->name = 'Employee';
        $developer->slug = 'employee';
        if (!Role::where(['slug' => 'employee'])->first()) {
            $developer->save();
        }
        $swe = new Role();
        $swe->name = 'Scientific employee';
        $swe->slug = 'sw';
        $swe->save();
        if (!Role::where(['slug' => 'sw'])->first()) {
            $swe->save();
        }
    }
}
