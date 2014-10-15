<?php namespace App\Repository\Backend;

/**
 * Interface ITvSlotRepository
 * @package App\Repository\Backend
 * @author Milan Batica
 *
 * Contains methods for manipulation of tv_slot database
 *
 */
interface ITvSlotRepository
{


    /**
     * @return array containing list of all TvSlot objects from database
     */
    public function getAllSlotsList();

}