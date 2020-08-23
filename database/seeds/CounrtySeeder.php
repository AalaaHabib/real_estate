<?php

use Illuminate\Database\Seeder;
use App\Counrty;
class CounrtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries=['Alex','cairo','Giza','Beni-Suef','Ismailia','Aswan',' Fayoum',
        'Minya','Port Said','Suez','Luxor','al-Mansura'];
       foreach ($countries as $country)
       {
        Counrty::create([
               'name'=>$country
           ]);
       } 
    
    }
}
