<?php

namespace App\Http\Controllers;
use App\Content;
use App\Images;
use App\Services;
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
       $logo = Images::where('type','logo')->get()->first();
       $certification = Images::where('type','certification')->get();
       $usaimage = Images::where('type','usaimage')->get()->first();
       $europeimage = Images::where('type','europeimage')->get()->first();
       $australiaimage = Images::where('type','australiaimage')->get()->first();
       $newzelandimage = Images::where('type','newzelandimage')->get()->first();
       $serviceslides = Services::where('type','slide')->get();
       $serviceslide = array();
       if($serviceslides)
           foreach ($serviceslides as $key=>$value){
               $serviceslide[$key] = json_decode($value->value);
           }
       else
           $serviceslide = null;
       $helps = Services::where('type','help')->get();
       $help = array();
       if($helps)
           foreach ($helps as $key=>$value){
               $content = json_decode($value->value);
               $content->id = $value->id;
               $help[$key] = $content;
           }
       else
           $help = null;
       return view('homepage')
           ->with('aboutus',$aboutus[0]->value)
           ->with('banner',$banner)
           ->with('comapnydetail',$companydetails)
           ->with('logo',$logo->path)
           ->with('certification',$certification)
           ->with('usaimage',$usaimage->path)
           ->with('europeimage',$europeimage->path)
           ->with('australiaimage',$australiaimage->path)
           ->with('newzelandimage',$newzelandimage->path)
           ->with('serviceslide',$serviceslide)
           ->with('help',$help)
           ;
   }

   public function homeajax(){
       $aboutus = Content::where('type','aboutus')->get();
       $banner = Images::where('active','1')
           ->where('type','banner')->get();
       $certification = Images::where('type','certification')->get();
       $usaimage = Images::where('type','usaimage')->get()->first();
       $europeimage = Images::where('type','europeimage')->get()->first();
       $australiaimage = Images::where('type','australiaimage')->get()->first();
       $newzelandimage = Images::where('type','newzelandimage')->get()->first();
       $serviceslides = Services::where('type','slide')->get();
       $serviceslide = array();
       if($serviceslides)
           foreach ($serviceslides as $key=>$value){
               $serviceslide[$key] = json_decode($value->value);
           }
       else
           $serviceslide = null;
       if($banner){
           $banner[0]->class ='active';
       }
       return view('homeajax')
           ->with('aboutus',$aboutus[0]->value)
           ->with('banner',$banner)
           ->with('certification',$certification)
           ->with('usaimage',$usaimage->path)
           ->with('europeimage',$europeimage->path)
           ->with('australiaimage',$australiaimage->path)
           ->with('newzelandimage',$newzelandimage->path)
           ->with('serviceslide',$serviceslide)
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
