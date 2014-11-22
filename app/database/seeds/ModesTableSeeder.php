<?php

class ModesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('modes')->delete();

        $modes = array(
            array('title' => 'Classic', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('title' => 'Sharpshooter', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
        );

        // Uncomment the below to run the seeder
        DB::table('modes')->insert($modes);
    }
}