<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Finder;

class ConfigServiceProvider extends ServiceProvider {

	/**
	 * Overwrite any vendor / package configuration.
	 *
	 * This service provider is intended to provide a convenient location for you
	 * to overwrite any "vendor" or package configuration that you may want to
	 * modify before the application handles the incoming request / command.
	 *
	 * @return void
	 */
	public function register()
        {
            $config = app('config');
            
            $envPath = app()->configPath() . '/' . getenv('APP_ENV');

            foreach (Finder::create()->files()->name('*.php')->in($envPath) as $file)
            {
                $configName = basename($file->getRealPath(), '.php');
                $oldConfigValues = $config->get($configName);
                $newConfigValues = require $file->getRealPath();

                // Replace any matching values in the old config with the new ones.
                // Doesn't yet handle matching arrays in the config, it will just replace them.
                $config->set($configName, $newConfigValues + $oldConfigValues);
            }
        }

}
