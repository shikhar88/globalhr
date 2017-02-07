<?php
/**
 * Created by PhpStorm.
 * User: shikhar
 * Date: 2/4/2017
 * Time: 6:40 PM
 */

namespace App\Http\Controllers;
use App\Content;
use App\Images;
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
        if(Input::get('crud',null)=='1'){
            if(Input::get('action')=='delete')
            {
                $id = Input::get('id');
                $img = Images::find($id);
                try{
                    unlink(public_path().$img->path);
                }
                catch(\ErrorException $e){

                }
                Images::destroy($id);
            }
            elseif(Input::get('action')=='update'){
                $id = Input::get('id');
                $active = Input::get('active');
                Images::where('id',$id)
                    ->update(['active'=>$active]);
            }
        }
        else{
            $banner = Images::where('type','banner')->get();
            return view('admin.banner')->with('banner',$banner);
        }
    }

    public function bannersave(){
        $data=Input::all();
        if(isset($data['image'])){
            $extension=$data['image']->guessExtension();
            $filename=str_random(80).'.'.$extension;
            if($data['image']->move(public_path().'/uploads/banner_images/',$filename))
            {
                $img = new Images();
                $img->type = 'banner';
                $img->path ='/uploads/banner_images/'.$filename;
                $img->active = '1';
                $img->save();
            }
        }
        $banner = Images::where('type','banner')->get();
        return view('admin.banner')->with('banner',$banner);
    }


    public function companydetail(){
        if(Input::get('saveContact',null)=='1'){
            $data = $_GET;
            unset($data['saveContact']);
            $jsondata = json_encode($data);
            Content::where('type','footer')
                ->update(['value'=>$jsondata]);
                    ;
            dd($data);
        }
        else{
            $data = Content::where('type','footer')->get()->first();
            $rec = json_decode($data->value);
            return view('admin.companydetail')->with('data',$rec);
        }

    }


}