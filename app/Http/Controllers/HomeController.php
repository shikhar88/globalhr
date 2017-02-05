<?php

namespace App\Http\Controllers;
use App\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home(){
       $aboutus = Content::where('type','aboutus')->get();
       return view('homepage')->with('aboutus',$aboutus[0]->value);
   }
}
