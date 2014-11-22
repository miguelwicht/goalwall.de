<?php

class ModeStatisticTableSeeder extends Seeder {

    public function run()
    {
        DB::table('mode_statistic')->delete();

        $mode_statistic = array(
            array('mode_id' => 1, 'statistic_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('mode_id' => 1, 'statistic_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('mode_id' => 1, 'statistic_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
        );

        // Uncomment the below to run the seeder
        DB::table('mode_statistic')->insert($mode_statistic);
    }
}