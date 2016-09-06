<?php

namespace Esojtec\Package\Providers;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider{

	function boot(){

		include __DIR__ . '\..\routes.php';
		$this->loadViewsFrom(__DIR__ . '\..\views', 'package');
	}

	function register(){
		$this->app-singleton('package', function(){
			return $this->app->make('Esojtec\Package\Libraries\Package');
		});
	}
}
