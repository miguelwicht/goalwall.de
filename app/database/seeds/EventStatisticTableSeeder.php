<?php

class EventStatisticTableSeeder extends Seeder {

    public function run()
    {
        DB::table('event_statistic')->delete();

        $event_statistic = array(
            array('event_id' => 0, 'statistic_id' => 0, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('event_id' => 0, 'statistic_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('event_id' => 0, 'statistic_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
        );

        // Uncomment the below to run the seeder
        DB::table('event_statistic')->insert($event_statistic);
    }
}