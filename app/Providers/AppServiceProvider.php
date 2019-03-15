<?php

namespace App\Providers;

use App\Models\Main\WebSettings;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

use App\Models\BoardmembersDashboardSettings;
use Modules\Board\Http\Controllers\Main\TheBoardController;
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

        view()->composer('layouts.main.segments.footer', function($view){

        			$secretary = TheBoardController::get_secretary();
        			$organisation = WebSettings::where('slug', '=', 'organisatie-naam')->first();
        			$founded = WebSettings::where('slug', '=', 'oprichting')->pluck('value_text')->first();
        			$curr_year = Carbon::now()->year;

			$view->with(compact('secretary', 'organisation', 'founded', 'curr_year'));
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
