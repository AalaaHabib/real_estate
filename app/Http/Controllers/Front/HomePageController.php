<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\Counrty;
use App\Testimonial;
use App\SiteContent;
class HomePageController extends Controller
{
    //
    public function index(){
        $data['properties']=Property::get();
      
        $data['countries']=Counrty::select('id','name','img')->orderBy('id')->take(4)->get();
        $data['testimonials']=Testimonial::get();
        $data['count_alex']=Property::where('country_id','=',1)->count('country_id');
        $data['count_bns']=Property::where('country_id','=',4)->count('country_id');
        $data['count_cairo']=Property::where('country_id','=',2)->count('country_id');
        $data['count_giza']=Property::where('country_id','=',3)->count('country_id');

        //cahnge site content
        $data['banner_conent']=SiteContent::select('content')->where('name','=','banner')->first();
        $data['Featured_conent']=SiteContent::select('content')->where('name','=','Featured')->first();
        $data['Cities_conent']=SiteContent::select('content')->where('name','=','Cities')->first();
        $data['why_us_conent']=SiteContent::select('content')->where('name','=','why_us')->first();
        $data['testi_conent']=SiteContent::select('content')->where('name','=','testi')->first();
        $data['artical_conent']=SiteContent::select('content')->where('name','=','artical')->first();
        $data['Partner_conent']=SiteContent::select('content')->where('name','=','Partner')->first();
        $data['registerFooter_conent']=SiteContent::select('content')->where('name','=','registerFooter')->first();
        return view('Front.index')->with($data);
    }
    

    

}
