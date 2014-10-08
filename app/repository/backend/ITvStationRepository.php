<?php namespace App\Repository\Backend;

/**
 * Interface ITvStationRepository
 * @package App\Repository\Backend
 * @author Milan Batica
 *
 * Contains methods for manipulation of tv_station database table
 *
 */
interface ITvStationRepository
{

    /**
     * @return array containing all data from tv_station database table
     */
    public function getTvStationList();

}