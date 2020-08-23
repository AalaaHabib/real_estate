<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
            'userName'=>'Aalaa Habib',
            'email'=>'aalaamohabib@gmail.com',
            'password'=>sha1('lolaloly1411')
        ]);
    }
}
