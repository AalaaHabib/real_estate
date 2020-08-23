<?php

use Illuminate\Database\Seeder;
use App\Counrty;
use App\Ctegory;
use App\Admin;
use App\SiteContent;
use App\Property; 
class DatabaseSeeder extends Seeder
{
 
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class); 
        $this->call(CounrtySeeder::class); 
        $this->call(ProprtySeeder::class);
        $this->call(SiteContentSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(AgencySeeder::class);
        $this->call(MessageSeeder::class);
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
            'password'=>sha1('alaa'),
            'img'=>'2.png',
            'postion'=>'Doctor',
            'phone'=>'01234567890',
            'taxNumber'=>rand(1000,3000),
            'faxNumber'=>rand(1000,3000)
        ]);
        \App\User::create([
            'UserName'=>'ahmed',
            'email'=>'ahmed@gmail.com',
            'password'=>sha1('ahmed'),
            'is_Agent'=>1,
            'img'=>'3.png',
            'postion'=>'Teacher',
            'phone'=>'01234567890',
            'taxNumber'=>rand(1000,3000),
            'faxNumber'=>rand(1000,3000)
        ]);
        \App\User::create([
            'UserName'=>'esraa',
            'email'=>'esraa@gmail.com',
            'password'=>sha1('esraa'),
            'is_Agent'=>1,
            'img'=>'4.png',
            'postion'=>'Student',
            'phone'=>'01234567890',
            'taxNumber'=>rand(1000,3000),
            'faxNumber'=>rand(1000,3000)

        ]);
        \App\User::create([
            'UserName'=>'asmaa',
            'email'=>'asmaa@gmail.com',
            'password'=>sha1('asmaa'), 
            'img'=>'5.png',
            'postion'=>'CEO',
            'phone'=>'01234567890',
            'taxNumber'=>rand(1000,3000),
            'faxNumber'=>rand(1000,3000) 
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
               'img'=>'pc'.$i.'.jpg',
           ]);
         $i++;
       } 
    
    }
}
class AgencySeeder extends Seeder
{  
    public function run()
    {
        $agencies=[
            'Country House Real Estate',
            'High-Rise Real Estate',
            'Modern House Real estate',
            'Real estate experts',
            'Luxury House Real Estate',
            'James Estate Agents',
        ];
        for($i=1;$i<7;$i++)
        \App\Agency::create([
            'name'=>$agencies[$i-1],
            'taxNumber'=>rand(600000,700000),
            'faxNumber'=>rand(600000,700000),
            'img'=>$i.'.jpg',
            'email'=>\Str::slug($agencies[$i-1]).'@agency.com',
            'phone'=>'01234567890'
        ]); 
    }
}
class ProprtySeeder extends Seeder
{ 
    public function run()
    {
        for($i=0;$i<=20;$i++){
            $property=Property::create([
                'country_id'=>rand(1,12),
               /* 'Agency_id'=>rand(1,6),*/
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
                'main_img'=>'fp'.rand(1,27).'.jpg',
                'city'=>'cairo'  ,
                'address'=>'street number 18' ,
                
            ]); 
            for($x=0;$x<4;$x++)
                \App\Picture::create([
                    'prop_id'=>$property->id,
                    'img'=>'fb'.rand(1,27).'.jpg'
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
class TestimonialSeeder extends Seeder
{ 
    public function run()
    {
         for($i=0;$i<6;$i++)
            \App\Testimonial::create(
                [
                    'desc'=>"Very Amazing Website Help Me to Buy my current Flat and I won't leave it",
                    "user_id"=>1
                ]
            );
    }
}
class SettingSeeder extends Seeder
{ 
    public function run()
    { 
        \App\Setting::create(
            [
            'logo'=>'3QAR.com',
            'favIcon'=>'favicon.ico',
            'city'=>'Beni-Suef',
            'address'=>'Beni-Suef Alfashn - 3 werash street',
            'phone'=>'01234567890',
            'works_hour'=>'From 2.00 AM To 9.00 PM',
            'email'=>'Support@3QAR.com',
            'map'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13950.039014132626!2d31.101947424157718!3d29.061078151802874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1593904908377!5m2!1sar!2seg" width="1000" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
            'fb'=>'#',
            'tiwitter'=>'#',
            'insta'=>'#',
            'Skype'=>'#',
            'prinst'=>'#',
            ]
        );
    }
}
class MessageSeeder extends Seeder
{  
    public function run()
    {
        $messages=[
            'Country House Real Estate',
            'High-Rise Real Estate',
            'Modern House Real estate',
            'Real estate experts',
            'Luxury House Real Estate',
            'James Estate Agents',
        ];
        for($i=1;$i<6;$i++)
        \App\Messages::create([ 
            'name'=>"Ali Maher",
            'title'=>"Problem When Uploading Files",
            'message'=>"How Are You >> Problem When Uploading Files", 
            'email'=>\Str::slug($messages[$i-1]).'@agency.com',
            'phone'=>'01234567890'
        ]); 
    }
}