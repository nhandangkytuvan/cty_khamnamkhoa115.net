<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
class MyMailController extends Controller
{
    public function sendmail(Request $request){
    	Mail::send('emails.send',['request'=>$request], function ($message)
		{
		    $message->from('nhandangkytuvan@gmail.com', 'PK Nam Khang');
		    $message->to('hu1851680732@gmail.com');
		    $message->subject('Người dùng đăng ký khám');
		});
		return 1;
    }
    public function sendphone(Request $request){
    	Mail::send('emails.sendphone',['request'=>$request], function ($message)
		{
		    $message->from('nhandangkytuvan@gmail.com', 'PK Nam Khang');
		    $message->to('hu1851680732@gmail.com');
		    $message->subject('Người dùng đăng ký gọi lại !');
		});
		return 1;
    }
}