<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

use App\Models\BoardmembersDashboardSettings;
use Modules\SocialMedia\Entities\Models\Main\SocialMedia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('board.*', function($view){
			$view	->with('settings', BoardmembersDashboardSettings::settings());
		});

        view()->composer('socialmedia::includes.main.social_media_component', function($view){
			$view->with('social_media_items',SocialMedia::get_social_media());
		});

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
