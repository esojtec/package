<?php

namespace Esojtec\Package\Providers;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider{

	function boot(){
		$this->loadViewsFrom(__DIR__ . '\..\views', 'package');
	}

	function register(){
		$this->app-singleton('package', function(){
			return $this->app->make('Esojtec\Package\Libraries\Package');
		});
	}
}
