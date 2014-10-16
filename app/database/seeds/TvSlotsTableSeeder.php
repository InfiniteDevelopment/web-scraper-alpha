<?php

use App\Models\TvSlot as TvSlot;

class TvSlotsTableSeeder extends Seeder {

	public function run()
	{

        /**
         * Clear tv_slot database table
         */

        DB::table('tv_slot')->delete();

        $tvSlotSeed = new TvSlot();
        $tvSlotSeed->air_time = "20:00";
        $tvSlotSeed->title = "Game Of Thrones";
        $tvSlotSeed->tv_station_id = 1;
        $tvSlotSeed->save();

        $tvSlotSeed = new TvSlot();
        $tvSlotSeed->air_time = "21:00";
        $tvSlotSeed->title = "Vikings";
        $tvSlotSeed->tv_station_id = 1;
        $tvSlotSeed->save();

        $tvSlotSeed = new TvSlot();
        $tvSlotSeed->air_time = "22:00";
        $tvSlotSeed->title = "Arrow";
        $tvSlotSeed->tv_station_id = 1;
        $tvSlotSeed->save();

        $tvSlotSeed = new TvSlot();
        $tvSlotSeed->air_time = "20:00";
        $tvSlotSeed->title = "Flash";
        $tvSlotSeed->tv_station_id = 2;
        $tvSlotSeed->save();

        $tvSlotSeed = new TvSlot();
        $tvSlotSeed->air_time = "21:00";
        $tvSlotSeed->title = "Gotham";
        $tvSlotSeed->tv_station_id = 2;
        $tvSlotSeed->save();


	}

}