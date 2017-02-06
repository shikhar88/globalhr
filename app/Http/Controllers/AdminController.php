<?php
/**
 * Created by PhpStorm.
 * User: shikhar
 * Date: 2/4/2017
 * Time: 6:40 PM
 */

namespace App\Http\Controllers;
use App\Content;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function admin(){
        return view('admin.login');
    }

    public function authenticate(){
        $username = Input::get('username');
        $password = Input::get('password');
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('admin');
        }
        else return redirect('/login')->with('error','Invalid Login details.');

    }


    public function dashboard(){
        return view('admin.template');
    }

    public function content(){
            if(Input::get('save',null)=='1'){
                $content = Input::get('content');
                Content::where('type','aboutus')
                    ->update(['value'=>$content])
                ;
            }
            else{
                $aboutus = Content::where('type','aboutus')->get();
                return view('admin.aboutus')->with('aboutus',$aboutus[0]->value);
            }
    }

    public function banner() {
        return view('admin.banner');
    }


}