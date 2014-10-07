<?php namespace App\Models;

/**
 * Class TvSlot
 *
 * Model representing tv_slot database table
 *
 * @package App\Models
 * @author Milan Batica
 *
 */
class TvSlot extends \Eloquent
{

    protected $table = "tv_slots";

    protected $fillable = ['air_time', 'title', 'tv_station_id'];

    /**
     *
     * Define many-to-one relationship between TvSlot and TvStation
     * Many TvSlots belong to single TvStation
     *
     * @return null
     */
    public function tvStation()
    {
        return $this->belogsTo('TvStation');
    }
}