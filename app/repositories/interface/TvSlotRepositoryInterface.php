<?php namespace App\Repositories;

use App\Models\TvStation;


interface TvSlotRepositoryInterface extends GenericRepositoryInterface
{
    /**
     * @param TvStation $tvStation
     * @return mixed List of all TvSlot objects that belong to given TvStation
     */
    public function findByTvStation(TvStation $tvStation);
}