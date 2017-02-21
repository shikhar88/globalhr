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
        $logo = Images::where('type','logo')->get()->first();
        return view('admin.template')->with('logo',$logo->path);
    }

    public function content(){
        $logo = Images::where('type','logo')->get()->first();
            if(Input::get('save',null)=='1'){
                $content = Input::get('content');
                Content::where('type','aboutus')
                    ->update(['value'=>$content])
                ;
            }
            else{
                $aboutus = Content::where('type','aboutus')->get();
                return view('admin.aboutus')->with('aboutus',$aboutus[0]->value)->with('logo',$logo->path);
            }
    }

    public function banner() {
        $logo = Images::where('type','logo')->get()->first();
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
            return view('admin.banner')->with('banner',$banner)->with('logo',$logo->path);
        }
    }

    public function bannersave(){
        $logo = Images::where('type','logo')->get()->first();
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
        return view('admin.banner')->with('banner',$banner)->with('logo',$logo->path);
    }


    public function companydetail(){
        $logo = Images::where('type','logo')->get()->first();
        if(Input::get('saveContact',null)=='1'){
            $data = $_GET;
            unset($data['saveContact']);
            $jsondata = json_encode($data);
            Content::where('type','footer')
                ->update(['value'=>$jsondata]);
        }
        else{
            $data = Content::where('type','footer')->get()->first();
            $rec = json_decode($data->value);
            return view('admin.companydetail')->with('data',$rec)->with('logo',$logo->path);
        }

    }

    public function study(){
             $logo = Images::where('type','logo')->get()->first();
            $usa = Content::where('type','usa')->get()->first();
            $australia = Content::where('type','australia')->get()->first();
            $newzealand = Content::where('type','newzealand')->get()->first();
            $europe = Content::where('type','europe')->get()->first();
            return view('admin.study')
                ->with('usa',$usa->value)
                ->with('aus',$australia->value)
                ->with('nwz',$newzealand->value)
                ->with('eur',$europe->value)
                ->with('logo',$logo->path);
    }


    public function savestudy(){
        $usa = Input::get('usa');
        $aus = Input::get('aus');
        $nwz = Input::get('nwz');
        $eur = Input::get('eur');
        Content::where('type','usa')
            ->update(['value'=>$usa]);
        Content::where('type','australia')
            ->update(['value'=>$aus]);
        Content::where('type','newzealand')
            ->update(['value'=>$nwz]);
        Content::where('type','europe')
            ->update(['value'=>$eur]);
    }

    public function logo() {
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
            $logo = Images::where('type','logo')->get()->first();
            $certification = Images::where('type','certification')->get();
            return view('admin.logo')->with('logo',$logo->path)
                ->with('certification',$certification)
                ;
        }


    }
    public function logosave(){
        $data=Input::all();
        if(isset($data['logo'])){
            $img = Images::where('type','logo')->get()->first();
            try{
                unlink(public_path().$img->path);
            }
            catch(\ErrorException $e){

            }
            Images::destroy($img->id);
            $extension=$data['logo']->guessExtension();
            $filename='logo'.'.'.$extension;
            if($data['logo']->move(public_path().'/uploads/logo/',$filename))
            {
                $img = new Images();
                $img->type = 'logo';
                $img->path ='/uploads/logo/'.$filename;
                $img->active = '1';
                $img->save();
            }
        }
        elseif (isset($data['certification'])){
            $extension=$data['certification']->guessExtension();
            $filename=str_random(80).'.'.$extension;
            if($data['certification']->move(public_path().'/uploads/certification/',$filename))
            {
                $img = new Images();
                $img->type = 'certification';
                $img->path ='/uploads/certification/'.$filename;
                $img->active = '1';
                $img->save();
            }
        }
        $logo = Images::where('type','logo')->get()->first();
        $certification = Images::where('type','certification')->get();
        return view('admin.logo')->with('logo',$logo->path)
            ->with('certification',$certification)
            ;
    }

    public function password(){
        $logo = Images::where('type','logo')->get()->first();
        return view('admin.password')->with('logo',$logo->path)
            ;
    }

    public function savepassword(){
        $credentials = ['username' => Auth::user()->username, 'password' => Input::get('oldPassword')];
        dd(Input::get('password'));
        if (Auth::validate($credentials)) {
            $user = Auth::user();
            $user->password = Input::get('password');
            $user->save();
        }
        else{

        }
    }


}