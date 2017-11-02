<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session;
use Request;

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
        if (!Session::has('applocale')) {
            $lang = substr(Request::server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
            if ($lang == "zh") {
                $lang = "cn";
            } else {
                $lang = "en";
            }
            // Session::put('applocale', $lang);
            Session::put('applocale', 'en');// 暂时只有en
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
