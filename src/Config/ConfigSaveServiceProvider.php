<?php
namespace MicroweberPackages\Config;

use Illuminate\Support\ServiceProvider;

/**
 * Class ConfigSaveServiceProvider
 * @package MicroweberPackages\Config
 */

class ConfigSaveServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->app->bind('ConfigSave', function($app){
			return new ConfigSave($app);
		});

        $this->app->alias('ConfigSave', ConfigSave::class);
    }
}
