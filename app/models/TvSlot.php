<?php namespace App\Models;

/**
 * Class TvSlot
 * @package App\Models
 * @author Milan Batica
 *
 * Model representing tv_slot database table
 *
 */
class TvSlot extends \Eloquent {

    protected $table = "tv_slots";

	protected $fillable = ['air_time', 'title', 'tv_station_id'];
}