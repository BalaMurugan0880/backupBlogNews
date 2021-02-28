<?php

use Illuminate\Database\Seeder;
use App\User;
use App\role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = role::where('name', 'admin')->first();
        $userRole = role::where('name', 'user')->first();
        $authorRole = role::where('name', 'author')->first();

        $admin = User::create([
        	'name' => 'Admin User',
        	'email' => 'admin@admin.com',
        	'password' => Hash::make('password'),
            'role' => 'admin',
        	'email_verified_at' =>  now(),
        ]);

         $user = User::create([
        	'name' => 'User',
        	'email' => 'user@user.com',
        	'password' => Hash::make('password'),
            'role' => 'user',
        	'email_verified_at' =>  now(),
        ]);

         $author = User::create([
            'name' => 'author',
            'email' => 'author@author.com',
            'password' => Hash::make('password'),
            'role' => 'author',
            'email_verified_at' =>  now(),
        ]);

         $admin->roles()->attach($adminRole);
         $user->roles()->attach($userRole);
         $author->roles()->attach($authorRole);
    }
}
