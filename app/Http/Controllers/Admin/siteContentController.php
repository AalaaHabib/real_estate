<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SiteContent;
use App\Property;
use App\Counrty;
use App\Testimonial;
class siteContentController extends Controller
{
    function index(){
        $data['banner']=SiteContent::select('content')->first();
        $data['Featured']=SiteContent::select('content')->where('name','Featured')->first();
        $data['Cities']=SiteContent::select('content')->where('name','Cities')->first();
        $data['why_us']=SiteContent::select('content')->where('name','why_us')->first();
        $data['testi']=SiteContent::select('content')->where('name','testi')->first();
        $data['registerFooter']=SiteContent::select('content')->where('name','registerFooter')->first();
        $data['footer']=SiteContent::select('content')->where('name','footer')->first();
        
        return view('admin.siteContent.editWebsiteContent')->with($data);
    }
    function update(Request $request ){



        $data=array(
            'title'=>$request->banner_titile,
            'sub_title'=>$request->banner_subtitile,
        );
       /* foreach($data['banner'] as $key=>$value){
            $k[]=$key;
            $v[]="'".$value."'";
        }
        $k=implode(",",$k);
        $v=implode(",",$v); */
        SiteContent::where('id', 1)->update(['banner' => json_decode($data)]);
    }
}
