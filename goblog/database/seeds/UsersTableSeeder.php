<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
    		[
    			'name'			=> 'Suryo',
    			'email'			=> 'suryo@gmail.com',
    			'password'		=> bcrypt('123'),
    			'created_at'	=> now(),
    			'updated_at'	=> now(),
    		],
    		[
    			'name'			=> 'Widiyanto',
    			'email'			=> 'widi@gmail.com',
    			'password'		=> bcrypt('123'),
    			'created_at'	=> now(),
    			'updated_at'	=> now(),
    		]
    	];

    	DB::table('users')->truncate();
        DB::table('users')->insert($data);
    }
}
