<?php

namespace App\Http\Controllers;
use App\Service;
use App\Post;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function services(Request $request, $locale)
    {
        \App::setLocale($locale);
        
        $services=Service::withTranslation($locale)->get();
        
        return view('services', compact('services'));
    }

    public function schedule($locale)
    {
        \App::setLocale($locale);
        return view('schedule');
    }

    public function categoryServices($slug)
    {
        $cat=\App\CategoryService::where('slug', $slug)
        ->withTranslation(\App::getLocale())
        ->first();
        $services=$cat->services;
        return view('services', compact('services'));
    }

    public function viewService($slug)
    {
        dd($slug);
        $service=Service::where('slug', $slug)
        ->withTranslation(\App::getLocale())
        ->first();
        
        return view('viewService', compact('service'));
    }

    public function viewPost($slug)
    {
        $post=Post::where('slug', $slug)->withTranslation(\App::getLocale())
        ->first();
        $post->view=$post->view+1;
        $post->save();
        
        $top_posts=Post::withTranslation(\App::getLocale())
        ->where('category_id', $post->category_id)
        ->orderBy('view', 'DESC')
        ->limit('4')
        ->get();
        
        return view('viewPost', compact('post', 'top_posts'));
    }

    public function tablo()
    {
        return view('tablo');
    }

    public function page($slug)
    {
        $page=\App\Page::withTranslation(\App::getLocale())
        ->where('slug', $slug)
        ->first();
        
        $pages=\App\Page::where('category', $page->category)
        ->withTranslation(\App::getLocale())
        ->orderBy('order')
        ->get();
        return view('page', compact('page', 'pages'));
    }

    public function hotels()
    {
        return view('hotels');
    }

    public function posts(Request $request)
    {
        $category=\App\Category::where('slug', $request->slug)->first();

        $posts=Post::withTranslation(\App::getLocale())
        ->where('category_id', $category->id)
        ->latest()
        ->paginate('6');
        
        $top_posts=Post::withTranslation(\App::getLocale())
        ->where('category_id', $category->id)
        ->orderBy('view', 'DESC')
        ->limit('4')
        ->get();

        return view('posts', compact('posts', 'top_posts'));
    }

    public function transport()
    {
        return view('transport');
    }

    public function message(Request $request)
    {
        $msg= new \App\Message();

        $msg->name=$request->name;
        $msg->phone=$request->phone;
        $msg->body=$request->body;
        $msg->save();

        return back();
    }
}
