<?php

use App\Repository\Backend\ITvStationRepository as ITvStationRepository;
use App\Models\TvStation as TvStation;

class TvStationsTableSeeder extends Seeder
{

    public function run()
    {

        /**
         * Clear tv_stations database table
         */
        DB::table('tv_station')->delete();

        $tvStationSeed = new TvStation();
        $tvStationSeed->tv_station_name = 'RTS1';
        $tvStationSeed->url = 'http://tv.aladin.info/tv-program-rts-1';
        $tvStationSeed->save();

        $tvStationSeed = new TvStation();
        $tvStationSeed->tv_station_name = 'RTS2';
        $tvStationSeed->url = 'http://tv.aladin.info/tv-program-rts-2';
        $tvStationSeed->save();

    }

}