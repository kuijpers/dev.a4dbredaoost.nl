<?php

namespace Modules\Didyouknow\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

use Illuminate\Support\Facades\Gate;

class DidyouknowServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();

        $this->registerDykPolicies();
        $this->registerDykiPolicies();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('didyouknow.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'didyouknow'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/didyouknow');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ]);

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/didyouknow';
        }, \Config::get('view.paths')), [$sourcePath]), 'didyouknow');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/didyouknow');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'didyouknow');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'didyouknow');
        }
    }

    /**
     * Register an additional directory of factories.
     * @source https://github.com/sebastiaanluca/laravel-resource-flow/blob/develop/src/Modules/ModuleServiceProvider.php#L66
     */
    public function registerFactories()
    {
        if (! app()->environment('production')) {
            app(Factory::class)->load(__DIR__ . '/Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }


	public function registerDykPolicies(){

    	// create-dyk-post
		// edit-dyk-post
		// edit-own-dyk-post
		// publish-dyk-post
		// delete-dyk-post
		// delete-own-dyk-post
		// view-deleted-dyk-posts
		// destroy-dyk-post

		Gate::define('create-dyk-post', function ($user) {
			return $user->hasAccess(['create-dyk-post']);
		});

		Gate::define('edit-dyk-post', function ($user) {
			return $user->hasAccess(['edit-dyk-post']);
		});

		Gate::define('edit-own-dyk-post', function ($user) {
			return $user->hasAccess(['edit-own-dyk-post']);
		});

		Gate::define('publish-dyk-post', function ($user) {
			return $user->hasAccess(['publish-dyk-post']);
		});

		Gate::define('delete-dyk-post', function ($user) {
			return $user->hasAccess(['delete-dyk-post']);
		});

		Gate::define('delete-own-dyk-post', function ($user) {
			return $user->hasAccess(['delete-own-dyk-post']);
		});

		Gate::define('view-deleted-dyk-posts', function ($user) {
			return $user->hasAccess(['view-deleted-dyk-posts']);
		});

		Gate::define('destroy-dyk-post', function ($user) {
			return $user->hasAccess(['destroy-dyk-post']);
		});


//		Gate::define('update-post', function ($user, Post $post) {
//			return $user->hasAccess(['update-post']) or $user->id == $post->user_id;
//		});

//		Gate::define('see-all-drafts', function ($user) {
//			return $user->inRole('editor');
//		});

	}

	public function registerDykiPolicies(){

    	// create-dyki-post
		// edit-dyki-post
		// edit-own-dyki-post
		// publish-dyki-post
		// delete-dyki-post
		// delete-own-dyki-post
		// view-deleted-dyki-posts
		// destroy-dyki-post
		// change-dyki-settings

		Gate::define('create-dyki-post', function ($user) {
			return $user->hasAccess(['create-dyki-post']);
		});

		Gate::define('edit-dyki-post', function ($user) {
			return $user->hasAccess(['edit-dyki-post']);
		});

		Gate::define('edit-own-dyki-post', function ($user) {
			return $user->hasAccess(['edit-own-dyki-post']);
		});

		Gate::define('publish-dyki-post', function ($user) {
			return $user->hasAccess(['publish-dyki-post']);
		});

		Gate::define('delete-dyki-post', function ($user) {
			return $user->hasAccess(['delete-dyki-post']);
		});

		Gate::define('delete-own-dyki-post', function ($user) {
			return $user->hasAccess(['delete-own-dyki-post']);
		});

		Gate::define('view-deleted-dyki-posts', function ($user) {
			return $user->hasAccess(['view-deleted-dyki-posts']);
		});

		Gate::define('destroy-dyki-post', function ($user) {
			return $user->hasAccess(['destroy-dyki-post']);
		});

		Gate::define('change-dyki-settings', function ($user) {
			return $user->hasAccess(['change-dyki-settings']);
		});


//		Gate::define('update-post', function ($user, Post $post) {
//			return $user->hasAccess(['update-post']) or $user->id == $post->user_id;
//		});

//		Gate::define('see-all-drafts', function ($user) {
//			return $user->inRole('editor');
//		});
	}
}
