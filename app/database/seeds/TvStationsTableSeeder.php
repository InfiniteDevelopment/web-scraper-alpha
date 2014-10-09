<?php

use App\Models\TvStation as TvStation;

class TvStationsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('tv_station')->delete();
        DB::table('tv_slot')->delete();

        $tvStation = new TvStation();
        $tvStation->tv_station_name = 'RTS1';
        $tvStation->url = 'http://tv.aladin.info/tv-program-rts-1';

        $tvStation->save();

        $tvStation = new TvStation();
        $tvStation->tv_station_name = 'RTS2';
        $tvStation->url = 'http://tv.aladin.info/tv-program-rts-2';

        $tvStation->save();

    }

}