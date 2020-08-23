<?php

use Illuminate\Database\Seeder;
use App\SiteContent;
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
