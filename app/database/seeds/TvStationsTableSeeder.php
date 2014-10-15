<?php

use App\Repository\Backend\ITvStationRepository as ITvStationRepository;
use App\Models\TvStation as TvStation;

class TvStationsTableSeeder extends Seeder
{

    /**
     * @param ITvStationRepository $tvStationRepository
     *
     * Inject tvStationRepository in seeder class
     */
    public function __construct(ITvStationRepository $tvStationRepository)
    {
        $this->tvStation = $tvStationRepository;
    }

    public function run()
    {

        /**
         * Clear tv_stations database table
         */
        DB::table('tv_station')->delete();

        $tvStationTemp = new TvStation();
        $tvStationTemp->tv_station_name = 'RTS1';
        $tvStationTemp->url = 'http://tv.aladin.info/tv-program-rts-1';

        $this->tvStation->createTvStation($tvStationTemp);

        $tvStationTemp = new TvStation();
        $tvStationTemp->tv_station_name = 'RTS2';
        $tvStationTemp->url = 'http://tv.aladin.info/tv-program-rts-2';

        $this->tvStation->createTvStation($tvStationTemp);

    }

}