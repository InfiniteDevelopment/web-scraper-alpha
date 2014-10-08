<?php namespace App\Repository\Backend;

use App\Models\TvStation;

/**
 * Class TvStationRepository
 * @package App\Repository\Backend
 * @author Milan Batica
 *
 * Contains methods for manipulation of tv_station database table
 *
 */
class TvStationRepository implements ITvStationRepository
{

    public function __construct(TvStation $tvStation)
    {
        $this->tvStation = $tvStation;
    }

    /**
     * @return array containing all data from tv_station database table
     */
    public function getTvStationList()
    {
        return $this->tvStation->all();
    }
}

