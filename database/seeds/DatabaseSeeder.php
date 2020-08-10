<?php

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
    	//users seeder
    	\App\Admin::create([
            'userName'=>'peter',
            'email'=>'peter@gmail.com',
            'password'=>sha1('peter')
        ]);
        \App\User::create([
            'UserName'=>'alaa',
            'email'=>'alaa@gmail.com',
            'password'=>sha1('alaa')
        ]);
        \App\User::create([
            'UserName'=>'ahmed',
            'email'=>'ahmed@gmail.com',
            'password'=>sha1('ahmed'),
            'is_Agent'=>1
        ]);
        

        // $this->call(UserSeeder::class);
    }
}
