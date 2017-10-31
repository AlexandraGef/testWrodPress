<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $role = Roles::where('name','Admin')->first();
    $user = new User();
    $user->name = 'user';
    $user->email = 'user@example.com';
    $user->password = bcrypt('user');
    $user->save();
    $user->roles()->attach($role);

     $user = new User();
    $user->name = 'user2';
    $user->email = 'user2@example.com';
    $user->password = bcrypt('user2');
    $user->save();
     $user->roles()->attach(2);
 

     $user = new User();
    $user->name = 'user3';
    $user->email = 'user3@example.com';
    $user->password = bcrypt('user3');
    $user->save();
     $user->roles()->attach(3);
   
    }
}
