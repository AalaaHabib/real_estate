<?php

use Illuminate\Database\Seeder;
use App\Counrty;
use App\Ctegory;
use App\Admin;
use App\SiteContent;
use App\Property;
use App\SiteContent; 
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UserSeeder::class);
        // $this->call(CategorySeeder::class); 
        // $this->call(CounrtySeeder::class); 
        // $this->call(ProprtySeeder::class);
        // $this->call(SiteContentSeeder::class);
        
    }
}

class UserSeeder extends Seeder
{ 
    public function run()
    {
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
    }
}
class CategorySeeder extends Seeder
{ 
    public function run()
    {
        $categories=[
            'villa',
            'factory',
            'hose',
            'flat',
            'shop',
            'Owners Association',
            'Horoscope',
            'office',
            'other'
        ];
        foreach ($categories as $cat)
        {
            Ctegory::create([
                'name'=>$cat
            ]);
        }
    }
}
class CounrtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries=[
          'Alex',
          'cairo',
          'Giza',
          'Beni-Suef',
          'Ismailia',
          'Aswan',
          'Fayoum',
          'Minya',
          'Port Said',
          'Suez',
          'Luxor',
          'al-Mansura'
        ];
        $i=1;
       foreach ($countries as $country)
       {
        Counrty::create([
               'name'=>$country,
               'img'=>'pc'.$i.'jpg',
           ]);
       } 
    
    }
}
class ProprtySeeder extends Seeder
{ 
    public function run()
    {
        for($i=0;$i<=20;$i++){
            $property=Property::create([
                'country_id'=>rand(1,12),
                'category_id'=>rand(1,9),
                'user_id'=>rand(1,3),
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
                'main_img'=>rand(1,27).'.jpg',
                'city'=>'cairo'  ,
                'address'=>'street number 18' ,
                
            ]);
            for($=0;$i<4;$i++)
                \App\Picture::create([
                    'prop_id'=>$property->id,
                    'img'=>rand(1,27).'.jpg'
                ]);

            }
        }
}
class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //banner section 
       SiteContent::create([
            'name'=>'banner',
            'content'=>json_encode([
              'title'=>'Find Your Dream Home',
              'sub_title'=>'From as low as $10 per day with limited time offer discounts.',  
            ])

        ]);

        //featured property section
        SiteContent::create([
            'name'=>'Featured',
            'content'=>json_encode([
              'title'=>'Featured Properties',
              'sub_title'=>'Handpicked properties by our team.',  
            ])
        ]);

        //cities section
        SiteContent::create([
            'name'=>'Cities',
            'content'=>json_encode([
              'title'=>'Find Properties in These Cities',
              'sub_title'=>'You Can Find Us At 12 different Cities .',  
            ])
        ]);

        //why choose us section
        SiteContent::create([
            'name'=>'why_us',
            'content'=>json_encode([
              'title'=>'Why Choose Us',
              'sub_title'=>'We provide full service at every step.',  
              'reson1'=>json_encode([
                  'title'=>'Trusted By Thousands',
                  'desc'=>'Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.'
              ]),
              'reson2'=>json_encode([
                'title'=>'Wide Renge Of Properties',
                'desc'=>'Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.'
            ]),
            'reson3'=>json_encode([
                'title'=>'Financing Made Easy',
                'desc'=>'Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.'
            ]),
            ])
        ]);

        //Testimonial section
        SiteContent::create([
            'name'=>'testi',
            'content'=>json_encode([
              'title'=>'Testimonials',
              'sub_title'=>'You Can put your supportive comment here',  
            ])
        ]);

        //Artical section
        SiteContent::create([
            'name'=>'artical',
            'content'=>json_encode([
              'title'=>'Articles & Tips',
              'sub_title'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',  
            ])
        ]);

        //Partner section
        SiteContent::create([
            'name'=>'Partner',
            'content'=>json_encode([
            'title'=>'Our Partners',
            'sub_title'=>'We only work with the best companies around the globe.',  
            ])
        ]);

        //registerFooter section
        SiteContent::create([
            'name'=>'registerFooter',
            'content'=>json_encode([
            'title'=>'Become a Real Estate Agent',
            'sub_title'=>'We only work with the best companies around the globe.',  
            ])
        ]);

        //Footer section
        SiteContent::create([
            'name'=>'footer',
            'content'=>json_encode([
            'title'=>'About Site',
            'sub_title'=>'We’re reimagining how you buy, sell and rent. It’s now easier to get into a place you love. So let’s do this, together.',  
            ])
        ]);
    }
}