<?php

namespace App\Http\Controllers;
use App\Content;
use App\Images;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home(){
       $aboutus = Content::where('type','aboutus')->get();
       $banner = Images::where('active','1')
           ->where('type','banner')->get();
       if($banner){
           $banner[0]->class ='active';
       }
       $companydet = Content::where('type','footer')->get()->first();
       $companydetails = json_decode($companydet->value);
       return view('homepage')
           ->with('aboutus',$aboutus[0]->value)
           ->with('banner',$banner)
           ->with('comapnydetail',$companydetails)
           ;
   }

   public function homeajax(){
       $aboutus = Content::where('type','aboutus')->get();
       $banner = Images::where('active','1')
           ->where('type','banner')->get();
       if($banner){
           $banner[0]->class ='active';
       }
       return view('homeajax')
           ->with('aboutus',$aboutus[0]->value)
           ->with('banner',$banner)
           ;
   }
   public function abroad($country){
        if($country == 'usa')
            $name = 'USA';
        elseif ($country=='australia')
            $name = 'Australia';
        elseif ($country=='newzealand')
            $name = 'New Zealand';
        elseif ($country=='europe')
            $name = 'Europe';
        $content = Content::where('type',$country)->get()->first();
        return view('study')->with('name',$name)->with('content',$content->value);
   }
}
