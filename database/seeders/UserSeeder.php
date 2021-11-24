<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = Role::where('slug','employee')->first();
        $admin = Role::where('slug','admin')->first();
        $work = Permission::where('slug','work')->first();

        $user1 = User::factory()->create();
        $user1->save();
        $user1->roles()->attach($employee);
        $user1->roles()->attach($admin);
        $user1->permissions()->attach($work);

        $user2 = User::factory()->create();
        $user2->save();
       /* $user1->roles()->attach($employee);
        $user1->roles()->attach($admin);
        $user1->permissions()->attach($work);*/


    }
}
