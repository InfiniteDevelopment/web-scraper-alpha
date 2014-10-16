<?php namespace App\Repositories\ServiceProviders;

use Illuminate\Support\ServiceProvider;

/**
 * Class RepositoryServiceProvider
 * @package App\Repositories\ServiceProviders
 *
 * Service provider designed for injecting repository dependencies into application
 */
class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        /**
         * TvStation service registration
         */
        $this->app->bind('App\Repositories\TvStationRepositoryInterface',
            'App\Repositories\TvStationRepositoryImplementation');

        /**
         * TvSlot service registration
         */
        $this->app->bind('App\Repositories\TvSlotRepositoryInterface',
            'App\Repositories\TvSlotRepositoryImplementationss');
    }

}