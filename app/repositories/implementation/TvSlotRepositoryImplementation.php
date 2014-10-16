<?php namespace App\Repositories;

use App\Models\TvSlot as TvSlot;
use App\Models\TvStation;

class TvSlotRepositoryImplementation implements TvSlotRepositoryInterface
{
    /**
     * @return array of all entities from selected database
     */
    public function getAll()
    {
        return TvSlot::all();
    }

    /**
     * @param $id
     * @return mixed Object from database with requested id
     */
    public function findById($id)
    {
        return TvSlot::find($id);
    }

    /**
     * @param TvStation $tvStation
     * @return mixed List of all TvSlot objects that belong to given TvStation
     */
    public function findByTvStation(TvStation $tvStation)
    {
        // TODO: Implement findByTvStation() method.
    }


}