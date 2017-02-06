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
       return view('homepage')
           ->with('aboutus',$aboutus[0]->value)
           ->with('banner',$banner)
           ;
   }
}
