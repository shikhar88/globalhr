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
        if(isset($_GET['phone']))
            $phone =$_GET['phone'];
        if(isset($_GET['email']))
            $email =$_GET['email'];

//        $to_email = 'basnet.shikhar@gmail.com';
//        Mail::to($to_email)->send(new SendMail());
        $data = array('subject'=>$subject ,'email' => 'enquiry.globaledu@gmail.com', 'first_name' => 'GLOBALHR', 'from' => 'sitemail.globalhr@gmail.com', 'from_name' => 'globalhr' );

        try{
        Mail::send( 'mail', ['data'=>$msg,'phone'=>$phone,'email'=>$email], function( $message ) use ($data)
            {
                $message->to( $data['email'] )->from( $data['from'], $data['first_name'] )->subject($data['subject']);
            });
        }
        catch(\ErrorException $e){

        }
    }
}
