<?php namespace App\Repositories;

interface TvStationRepositoryInterface extends GenericRepositoryInterface
{

    /**
     * @param $tvStationName string
     * @return mixed TvStation object with given name
     */
    public function findByName($tvStationName);

}
