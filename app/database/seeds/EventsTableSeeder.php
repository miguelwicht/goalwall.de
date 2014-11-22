<?php

class EventsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('events')->delete();

        $events = array(
            array('slug' =>'hessentag-2014', 'title' => 'Hessentag 2014',  'description' => 'Beschreibung', 'from' => \Carbon\Carbon::createFromDate(2014,07,22)->toDateTimeString(), 'until' => \Carbon\Carbon::createFromDate(2014,07,22)->toDateTimeString(), 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
        );

        // Uncomment the below to run the seeder
        DB::table('events')->insert($events);
    }
}