<?php

use App\User; 
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'edward',
        	'email' => 'edwarddiaz92@gmail.com',
        	'password' => bcrypt('123456')
        ]);
    }
}
