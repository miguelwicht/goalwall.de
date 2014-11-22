<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('EventsTableSeeder');
		$this->call('EventStatisticTableSeeder');
		$this->call('ModesTableSeeder');
		$this->call('ModeStatisticTableSeeder');
		$this->call('StatisticsTableSeeder');
	}

}
