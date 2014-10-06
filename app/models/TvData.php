<?php namespace App\Models;

class TvData extends \Eloquent {

    protected $table = "tv_program_data";

	protected $fillable = ['name', 'time'];
}