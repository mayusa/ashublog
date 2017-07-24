<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session, Config, Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        // detect Browser Locale and init lang
        if (!Session::has('applocale'))
        {
            $lang = substr( Request::server('HTTP_ACCEPT_LANGUAGE') ,0 , 2);
            if ($lang == "zh") {
                $lang = "cn";
            } else {
                $lang = "en";
            }
            Session::put('applocale', $lang);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
