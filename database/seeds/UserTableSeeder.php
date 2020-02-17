<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Glenn van Rijen';
        $user->email = 'glennvanrijen@gmail.com';
        $user->password = bcrypt('Test123?');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $admin = new User;
        $admin->name = 'Ruben van Rijen';
        $admin->email = 'rubenvanrijen@gmail.com';
        $admin->password = bcrypt('Test123?');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
