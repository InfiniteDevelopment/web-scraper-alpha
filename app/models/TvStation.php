<?php namespace App\Models;

/**
 * Class TvStation
 *
 * Model representing tv_station database table
 *
 * @package App\Models
 * @author Milan Batica
 *
 */
class TvStation extends AbstractModel
{
    protected $table = 'tv_station';

    protected $fillable = ['tv_station_name', 'url'];

    /**
     *
     * Define one-to-many relationship between TvStation and TvSlot
     * One TvStation can have many TvSlots
     *
     * @return array of TvSlots related to TvStation
     */
    public function tvSlots()
    {
        return $this->hasMany('App\Models\TvSlot');
    }
}