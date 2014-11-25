<?php namespace App\Repositories;

use App\Models\TvStation;


interface TvSlotRepository extends GenericRepository
{
    /**
     * @param TvStation $tvStation
     * @return mixed List of all TvSlot objects that belong to given TvStation
     */
    public function findByTvStation(TvStation $tvStation);

    /**
     * @param $deleteDate
     * @param $tvStationId
     * @return void
     *
     * Delete all TvSlots for selected TvStation and for provided date
     */
    public function deleteSlotsByDate($deleteDate, $tvStationId);
}