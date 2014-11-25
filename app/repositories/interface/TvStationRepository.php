<?php namespace App\Repositories;

interface TvStationRepository extends GenericRepository
{

    /**
     * @param $tvStationName string
     * @return mixed TvStation object with given name
     */
    public function findByName($tvStationName);

}
