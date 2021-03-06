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
use App\Services;
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
            return redirect()->intended('/admin/companydetail');
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
        return redirect('/admin/banner')->with('success','Banner has been added');
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
            $detailcountry = Content::where('type','detailcountry')->get()->first();
            return view('admin.study')
                ->with('usa',$usa->value)
                ->with('aus',$australia->value)
                ->with('nwz',$newzealand->value)
                ->with('eur',$europe->value)
                ->with('detail',json_decode($detailcountry->value))
                ->with('logo',$logo->path);
    }

    public function studyimage(){
        $logo = Images::where('type','logo')->get()->first();
        $usaimage = Images::where('type','usaimage')->get()->first();
        $europeimage = Images::where('type','europeimage')->get()->first();
        $australiaimage = Images::where('type','australiaimage')->get()->first();
        $newzelandimage = Images::where('type','newzelandimage')->get()->first();
        $detailcountry = Content::where('type','detailcountry')->get()->first();
        return view('admin.studyimage')
            ->with('logo',$logo->path)
            ->with('usaimage',$usaimage->path)
            ->with('europeimage',$europeimage->path)
            ->with('australiaimage',$australiaimage->path)
            ->with('newzelandimage',$newzelandimage->path)
            ->with('detail',json_decode($detailcountry->value));
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

    public function savestudyimage(){
        $data=Input::all();
        $detail = array();
        $detail['titlefirst'] = $data['titlefirst'];
        $detail['descfirst'] = $data['descfirst'];
        $detail['titlesecond'] = $data['titlesecond'];
        $detail['descsecond'] = $data['descsecond'];
        $detail['titlethird'] = $data['titlethird'];
        $detail['descthird'] = $data['descthird'];
        $detail['titlefourth'] = $data['titlefourth'];
        $detail['descfourth'] = $data['descfourth'];
        Content::where('type','detailcountry')->update(['value'=>json_encode($detail)]);
        if(isset($data['usaimage'])){
            $img = Images::where('type','usaimage')->get()->first();
            try{
                unlink(public_path().$img->path);
            }
            catch(\ErrorException $e){

            }
            Images::destroy($img->id);
            $extension=$data['usaimage']->guessExtension();
            $filename='usaimage'.'.'.$extension;
            if($data['usaimage']->move(public_path().'/uploads/studyimage/',$filename))
            {
                $img = new Images();
                $img->type = 'usaimage';
                $img->path ='/uploads/studyimage/'.$filename;
                $img->active = '1';
                $img->save();
            }
        }
        if(isset($data['australiaimage'])){
            $img = Images::where('type','australiaimage')->get()->first();
            try{
                unlink(public_path().$img->path);
            }
            catch(\ErrorException $e){

            }
            Images::destroy($img->id);
            $extension=$data['australiaimage']->guessExtension();
            $filename='australiaimage'.'.'.$extension;
            if($data['australiaimage']->move(public_path().'/uploads/studyimage/',$filename))
            {
                $img = new Images();
                $img->type = 'australiaimage';
                $img->path ='/uploads/studyimage/'.$filename;
                $img->active = '1';
                $img->save();
            }
        }
        if(isset($data['newzelandimage'])){
            $img = Images::where('type','newzelandimage')->get()->first();
            try{
                unlink(public_path().$img->path);
            }
            catch(\ErrorException $e){

            }
            Images::destroy($img->id);
            $extension=$data['newzelandimage']->guessExtension();
            $filename='newzelandimage'.'.'.$extension;
            if($data['newzelandimage']->move(public_path().'/uploads/studyimage/',$filename))
            {
                $img = new Images();
                $img->type = 'newzelandimage';
                $img->path ='/uploads/studyimage/'.$filename;
                $img->active = '1';
                $img->save();
            }
        }
        if(isset($data['europeimage'])){
            $img = Images::where('type','europeimage')->get()->first();
            try{
                unlink(public_path().$img->path);
            }
            catch(\ErrorException $e){

            }
            Images::destroy($img->id);
            $extension=$data['europeimage']->guessExtension();
            $filename='europeimage'.'.'.$extension;
            if($data['europeimage']->move(public_path().'/uploads/studyimage/',$filename))
            {
                $img = new Images();
                $img->type = 'europeimage';
                $img->path ='/uploads/studyimage/'.$filename;
                $img->active = '1';
                $img->save();
            }
        }
        return redirect('/admin/studyimage')->with('success','Content has been added');

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
        return redirect('/admin/logo')->with('success','Content has been added');
    }

    public function password(){
        $logo = Images::where('type','logo')->get()->first();
        return view('admin.password')->with('logo',$logo->path)
            ;
    }

    public function savepassword(){
        $credentials = ['username' => Auth::user()->username, 'password' => Input::get('oldPassword')];
        if (Auth::validate($credentials)) {
            $user = Auth::user();
            $user->password = bcrypt(Input::get('password'));
            $user->save();
            if(Input::get('password') != Input::get('password_again')){
                return redirect('/admin/passwordchange')->with('error','Enter same password for the new password');
            }
            return redirect('/admin/passwordchange')->with('success','Password has been changed');
        }
        else{
            if(Input::get('password') != Input::get('password_again')){
                return redirect('/admin/passwordchange')->with('error','Enter same password for the new password');
            }
            else{
                return redirect('/admin/passwordchange')->with('error','Your old password does not match');
            }
        }
    }


    public function services(){

        if(Input::get('action',null)=='1'){
            $id = Input::get('id');
            $data = Services::where('id',$id)->select('value')->get()->first();
            return $data->value;
        }
        elseif (Input::get('action',null)=='2'){
            $id = Input::get('id');
            Services::destroy($id);
            echo '1';
        }
        else{
        $logo = Images::where('type','logo')->get()->first();
        $serviceslides = Services::where('type','slide')->get();
        $serviceslide = array();
        if($serviceslides)
            foreach ($serviceslides as $key=>$value){
                $data = json_decode($value->value);
                $data->id = $value->id;
                $serviceslide[$key] = $data;
            }
        else
            $serviceslide = null;
        return view('admin.services')->with('logo',$logo->path)
            ->with('serviceslide',$serviceslide)
            ;
        }
    }

    public function saveservices(){
        $data=Input::all();
        $content = array();
        $content['name'] = $data['name'];
        $content['position'] = $data['position'];
        $content['content'] = $data['content'];
        if(isset($data['serviceid'])){
            if(isset($data['thumbnailimage'])){
                $extension=$data['thumbnailimage']->guessExtension();
                $filename='logo'.'.'.$extension;
                if($data['thumbnailimage']->move(public_path().'/uploads/servicethumb/',$filename))
                {
                    $content['thumbnail'] = '/uploads/servicethumb/'.$filename;
                }
            }
            else{
                $content['thumbnail'] =$data['serviceimage'];
            }
            Services::where('id',$data['serviceid'])
                ->update(['value'=>json_encode($content)]);
        }
        else{
            if(isset($data['thumbnailimage'])){
                $extension=$data['thumbnailimage']->guessExtension();
                $filename='logo'.'.'.$extension;
                if($data['thumbnailimage']->move(public_path().'/uploads/servicethumb/',$filename))
                {
                    $content['thumbnail'] = '/uploads/servicethumb/'.$filename;
                }
            }
            else{
                $content['thumbnail'] = null;
            }
            $services = new Services();
            $services->type = 'slide';
            $services->value = json_encode($content);
            $services->save();
        }

//        $logo = Images::where('type','logo')->get()->first();
//        $serviceslides = Services::where('type','slide')->get();
//        $serviceslide = array();
//        if($serviceslides)
//            foreach ($serviceslides as $key=>$value){
//                $data = json_decode($value->value);
//                $data->id = $value->id;
//                $serviceslide[$key] = $data;
//            }
//        else
//            $serviceslide = null;
        return redirect('/admin/services')->with('success','Data has been updated');
//        return view('admin.services')->with('logo',$logo->path)
//            ->with('serviceslide',$serviceslide)
//            ;
    }

    public function help(){
        if(Input::get('action',null)=='1'){
            $id = Input::get('id');
            $data = Services::where('id',$id)->select('value')->get()->first();
            return $data->value;
        }
        elseif (Input::get('action',null)=='2'){
            $id = Input::get('id');
            Services::destroy($id);
            echo '1';
        }
        $logo = Images::where('type','logo')->get()->first();
        $helps = Services::where('type','help')->get();
        $data = array();
        foreach ($helps as $key=>$value){
            $content = json_decode($value->value);
            $content->id = $value->id;
            $data[$key] = $content;
        }
        return view('admin.help')->with('logo',$logo->path)->with('help',$data);
    }


    public function savehelp(){
        $data=Input::all();
        $content = array();
        $content['title'] = $data['title'];
        $content['desc'] = $data['desc'];
        if(isset($data['helpid'])){
            Services::where('id',$data['helpid'])
                ->update(['value'=>json_encode($content)]);
        }
        else{
            $services = new Services();
            $services->type = 'help';
            $services->value = json_encode($content);
            $services->save();
        }

        return redirect('/admin/help')->with('success','Content has been added');
    }


}