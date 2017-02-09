<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        $subject = '';
        $msg = '';
        if(isset($_GET['subject']))
            $subject =$_GET['subject'];
        if(isset($_GET['message']))
            $msg =$_GET['message'];
//        $to_email = 'basnet.shikhar@gmail.com';
//        Mail::to($to_email)->send(new SendMail());
        $data = array('subject'=>$subject ,'email' => 'basnet.shikhar@gmail.com', 'first_name' => 'GLOBALHR', 'from' => 'sitemail.globalhr@gmail.com', 'from_name' => 'globalhr' );

        try{
        Mail::send( 'mail', ['data'=>$msg], function( $message ) use ($data)
            {
                $message->to( $data['email'] )->from( $data['from'], $data['first_name'] )->subject($data['subject']);
            });
        }
        catch(\ErrorException $e){

        }
    }
}
