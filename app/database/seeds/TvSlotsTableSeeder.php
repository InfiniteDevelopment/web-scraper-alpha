<?php

class TvSlotsTableSeeder extends Seeder {

	public function run()
	{

        /**
         * Clear tv_slot database table
         */

        DB::table('tv_slot')->delete();


	}

}