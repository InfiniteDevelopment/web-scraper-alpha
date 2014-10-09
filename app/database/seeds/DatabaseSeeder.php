<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $this->call('TvStationsTableSeeder');
        $this->command->info('Tv station table successfully seeded!');
	}

}
