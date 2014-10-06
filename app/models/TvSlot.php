<?php namespace App\Models;

class TvSlot extends \Eloquent {

    protected $table = "tv_slots";

	protected $fillable = ['air_time', 'title', 'tv_station_id'];
}