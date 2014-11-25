<?php namespace App\Repositories;

use App\Models\TvStation as TvStation;

class TvStationRepositoryImplementation implements TvStationRepository
{
    /**
     * @return array of all entities from selected database
     */
    public function getAll()
    {
        return TvStation::all();
    }


    /**
     * @param $id
     * @return mixed Object from database with requested id
     */
    public function findById($id)
    {
        return TvStation::find($id);
    }


    /**
     * @param $tvStationName string
     * @return mixed TvStation object with given name
     */
    public function findByName($tvStationName)
    {
        $tvStation = TvStation::where('tv_station_name', '=', $tvStationName)->first();

        $response = null;

        $response = ($tvStation != null ? $tvStation : null);

        return $response;
    }
}