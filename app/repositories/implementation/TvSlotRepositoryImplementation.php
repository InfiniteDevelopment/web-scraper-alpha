<?php namespace App\Repositories;

use App\Models\TvSlot as TvSlot;
use App\Models\TvStation as TvStation;
use \DB as DB;

class TvSlotRepositoryImplementation implements TvSlotRepository
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

    /**
     * @param $deleteDate
     * @param $tvStationId
     * @return void
     *
     * Delete all TvSlots for selected TvStation and for provided date
     */
    public function deleteSlotsByDate($deleteDate, $tvStationId)
    {
        DB::table('tv_slot')->where('tv_station_id', '=', $tvStationId)
                            ->where('created_at', 'LIKE', $deleteDate)
                            ->delete();
    }
}