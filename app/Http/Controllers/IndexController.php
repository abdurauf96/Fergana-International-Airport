<?php

namespace App\Http\Controllers;
use App\Service;
use App\Post;
use App\Flight;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function  index($locale=null)
    {
        if(!empty($locale)){
            \App::setLocale($locale);
        };
        $services=Service::withTranslation(\App::getLocale())->get();
        
        $news=Post::withTranslation(\App::getLocale())
        ->where('category_id','1')
        ->latest()
        ->limit(3)
        ->get();
        $tenders=Post::withTranslation(\App::getLocale())
        ->where('category_id','2')
        ->latest()
        ->limit(3)
        ->get();
        $infos=Post::withTranslation(\App::getLocale())
        ->where('category_id','3')
        ->latest()
        ->limit(3)
        ->get();
        
        return view('welcome', compact('services', 'news', 'flights', 'tenders', 'infos'));
    }

    public function  services($slug=null)
    {
        if($slug!=null){
            $cat=\App\CategoryService::where('slug', $slug)
            ->withTranslation(\App::getLocale())
            ->with('services')
            ->first();
            $services=$cat->services;
            return view('services', compact('cat', 'services'));
        }else{
            $services=Service::withTranslation(\App::getLocale())->get();
            return view('services', compact('services'));
        }
        
        
    }


    public function  location()
    {
        return view('location');
    }

    public function  faq()
    {
        $faqs=\App\Faq::withTranslation(\App::getLocale())->get();
        return view('faq', compact('faqs'));
    }
}
