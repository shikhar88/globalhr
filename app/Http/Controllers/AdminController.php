<?php
/**
 * Created by PhpStorm.
 * User: shikhar
 * Date: 2/4/2017
 * Time: 6:40 PM
 */

namespace App\Http\Controllers;
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
            return redirect()->intended('admin/dashboard');
        }
        else return redirect('/admin')->with('error','Invalid Login details.');

    }


    public function dashboard(){
        return view('admin.template');
    }
}