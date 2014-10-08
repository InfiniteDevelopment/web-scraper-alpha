<?php namespace App\Repository\Backend;

use Illuminate\Support\ServiceProvider;

/**
 * Class TvStationServiceProvider
 * @package App\Repository\Backend
 * @author Milan Batica
 *
 * Service provider used for binding TvStationRepository to IoC
 *
 */
class TvStationServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider
     */
    public function register()
    {
        $app = $this->app;
        $app->bind('App\Repository\Backend\ITvStationRepository', 'App\Repository\Backend\TvStationRepository');
    }
}