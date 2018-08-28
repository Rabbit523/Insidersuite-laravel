<?php

use Illuminate\Database\Seeder;
// use Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
        		'username'		=> 'Fadi Khan',
        		'email'			=> 'fahadnajeeb76@gmail.com',
        		'password'		=> bcrypt('123'),
        		'title'			=> 'Mr',
        		'first_name'	=> 'Fadi',
        		'last_name'		=> 'Khan',
        		'day'			=> 3,
        		'month'			=> 'August',
        		'year'			=> 1994,
        		'nationality'	=> 'Pakistan',
        		'user_role_idFk'=> 1,
        	],[
        		'username'		=> 'Baig',
        		'email'			=> 'baig@getnada.com',
        		'password'		=> bcrypt('123'),
        		'title'			=> 'Mr',
        		'first_name'	=> 'Fadi',
        		'last_name'		=> 'Khan',
        		'day'			=> 3,
        		'month'			=> 'August',
        		'year'			=> 1994,
        		'nationality'	=> 'Pakistan',
        		'user_role_idFk'=> 1,
        	]
        ]);
    }
}
