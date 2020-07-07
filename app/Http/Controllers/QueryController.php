<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\Post;
use App\Service;

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
}
