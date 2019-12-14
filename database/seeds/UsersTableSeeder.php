<?php

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
        $users = [
        	[
        	'name' => 'ta van nam',
        	'email'=> 'namtv@gmail.com',
        	'password'=> bcrypt('namtv')
        	],
        	[
        	'name' => 'tran thanh hat son',
        	'email'=> 'sontt@gmail.com',
        	'password'=> bcrypt('namtv')
        	]

        ];
        DB::table('users')->insert($users);
    }
}
