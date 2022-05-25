<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($settings){
            $settings->with('gs',DB::table('general_settings')->find(1));
        });

        view()->composer('*',function($shippingCharge){
            $shippingCharge->with('sc',DB::table('shipping_charges')->find(1));
        });
    }
}
