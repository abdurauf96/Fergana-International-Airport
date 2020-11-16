<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\Post;
use App\Service;
use Illuminate\Support\Facades\Mail;
class QueryController extends Controller
{
    public function getReys()
    {
        $key=$_POST['key'];
        $flights=\App\Flight::withTranslation(\App::getLocale())
        ->where([
            'day'=>date('N'),
            'type'=>$key
        ])
        ->orderBy('time', 'asc')
        ->get();
        $res=view('ajax.resReys', compact('flights'));
        return $res;
    }

    public function getPost()
    {
        $id=$_POST['id'];
        $posts=Post::where('category_id', $id)
        ->withTranslation(\App::getLocale())
        ->limit(3)
        ->latest()
        ->get();
        $res=view('ajax.resPosts', compact('posts'));
        return $res;
    }

    public function search(Request $request)
    {
    
        $posts=Post::where('title', 'LIKE', '%'.$request->q.'%')
        ->orWhere('excerpt', 'LIKE', '%'.$request->q.'%')
        ->orWhere('body', 'LIKE', '%'.$request->q.'%')
        ->withTranslation(\App::getLocale())
        ->get();

        $services=Service::where('title', 'LIKE', '%'.$request->q.'%')
        ->orWhere('description', 'LIKE', '%'.$request->q.'%')
        ->orWhere('body', 'LIKE', '%'.$request->q.'%')
        ->withTranslation(\App::getLocale())
        ->get();
        $q=$request->q;
        return view('search', compact('posts', 'services', 'q'));
    }

    public function cipOrder()
    {
        
        $date=$_POST['date'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $reys_num=$_POST['reys_num'];

        $msg=array('name'=>$name, 'date'=>$date, 'phone'=>$phone, 'reys_num'=>$reys_num);
       
        $message=<<<TEXT
        CIP zal uchun buyurtma qoldirildi!
        
        Sana: {$date}
        Ismi: {$name}
        Telefon nomeri: {$phone} 
        Reys nomeri: {$reys_num}
TEXT;

        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $data = [
            'chat_id' => '-1001401093651',
            'text' => $message
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

        Mail::to('saydaliyevabdurauf@gmail.com')->send(new \App\Mail\Cip($msg));
        //Mail::to('fergana0888@gmail.com')->send(new \App\Mail\Cip($msg));
        Mail::to('ferganagit@uzbairports.uz')->send(new \App\Mail\Cip($msg));
        //Mail::to('sop.feg@uzbairports.uz')->send(new \App\Mail\Cip($msg));
       
    }

    public function xolodOrder()
    {
        
        $name=$_POST['name'];
        $phone=$_POST['phone'];

        $msg=array('name'=>$name, 'phone'=>$phone);
       
        $message=<<<TEXT
        Muzlatgich uchun murojat qoldirildi!
         
        Ismi: {$name}
        Telefon nomeri: {$phone} 
TEXT;

        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $data = [
            'chat_id' => '-1001401093651',
            'text' => $message
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

        Mail::to('saydaliyevabdurauf@gmail.com')->send(new \App\Mail\Cip($msg));
        //Mail::to('fergana0888@gmail.com')->send(new \App\Mail\Cip($msg));
        Mail::to('ferganagit@uzbairports.uz')->send(new \App\Mail\Cip($msg));
        //Mail::to('sop.feg@uzbairports.uz')->send(new \App\Mail\Cip($msg));
       
    }
}
