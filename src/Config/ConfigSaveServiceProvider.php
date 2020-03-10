<?php
namespace MicroweberPackages\Config;

use Illuminate\Support\ServiceProvider;

class ConfigSaveServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->app->bind('Config', function($app){
			return new ConfigSave($app);
		});
    }
}
