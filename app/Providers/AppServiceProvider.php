<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['request']->server->set('HTTPS', $this->app->environment() != 'local');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['request']->server->set('HTTPS','on');
        
        view()->composer('sections.header', function($view){
            $menus=\App\SiteMenu::withTranslation(\App::getLocale())
            ->whereNull('parent_id')->orderBy('order', 'asc')->get();
            $view->with(compact('menus'));
        });
        
        view()->composer('sections.tablo', function($view){
            $flights=\App\Flight::withTranslation(\App::getLocale())
            ->where([
            'day'=>date('N'),
            'type'=>'arrival'
            ])
            ->orderBy('time', 'asc')
            ->get();
            $view->with(compact('flights'));
        });

        view()->composer('layouts.sidebarService', function($view){
            $services=\App\Service::withTranslation(\App::getLocale())
            ->get();
            $view->with(compact('services'));
        });
        

        view()->composer('layouts.sidebarPage', function($view){
            $pages=\App\Page::withTranslation(\App::getLocale())
            ->get();
            $view->with(compact('pages'));
        });

        view()->composer('layouts.sidebarPost', function($view){
            $posts=\App\Post::withTranslation(\App::getLocale())
            ->limit('5')
            ->get();
            $view->with(compact('posts'));
        });

        view()->composer('sections.companies', function($view){
            $companies=\App\Company::all();
            $view->with(compact('companies'));
        });
    }
}
