<?php namespace App\Services\ServiceProviders;

use Illuminate\Support\ServiceProvider;

/**
 * Class RepositoryServiceProvider
 * @package App\Repositories\ServiceProviders
 *
 * Service provider designed for injecting repository dependencies into application
 */
class ScraperServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Scraper service registration
         */
        $this->app->bind('App\Services\ScraperService',
            'App\Services\ScraperServiceImplementation');

    }

}