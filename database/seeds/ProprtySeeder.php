<?php

use Illuminate\Database\Seeder;
use App\Property;
class ProprtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=20;$i++){
            Property::create([
                'country_id'=>rand(1,12),
                'category_id'=>rand(1,9),
                'user_id'=>rand(1,6),
                'status'=>'rent',
                'price'=>rand(400000,1000000),
                'size'=>rand(70,300),
                'Room_num'=>rand(2,8),
                'bathRoom_num'=>rand(1,3),
                'title'=>'Amazing property for sell',
                'desc'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                 when an unknown printer took a galley of type and scrambled it to make a type 
                 specimen book. It has survived not only five centuries, but also the leap into
                  electronic typesetting, remaining essentially unchanged. It was popularised in 
                  the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                  and more recently with desktop publishing software like Aldus PageMaker including
                   versions of Lorem Ipsum" ,
                'main_img'=>'1.png',
                'city'=>'cairo'  ,
                'address'=>'street number 18' ,
                
            ]);
    }
}
}