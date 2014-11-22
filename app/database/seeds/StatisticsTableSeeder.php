<?php

class StatisticsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('statistics')->delete();

        $statistics = array(
            array('shots' => 10, 'misses' => 3, 'score' => 20, 'mode_id' => 1, 'event_id' => 1,'time' => \Carbon\Carbon::now()->toDateTimeString(), 'player_name' => 'Spieler 1', 'player_image_path' => 'uploads/players/player1_201406052250.jpg', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('shots' => 10, 'misses' => 5, 'score' => 10, 'mode_id' => 1, 'event_id' => 1,'time' => \Carbon\Carbon::now()->toDateTimeString(), 'player_name' => 'Spieler 1', 'player_image_path' => 'uploads/players/player1_201406052250.jpg', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('shots' => 10, 'misses' => 1, 'score' => 50, 'mode_id' => 1, 'event_id' => 1,'time' => \Carbon\Carbon::now()->toDateTimeString(), 'player_name' => 'Spieler 1', 'player_image_path' => 'uploads/players/player1_201406052250.jpg', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('shots' => 10, 'misses' => 2, 'score' => 15, 'mode_id' => 1, 'event_id' => 1,'time' => \Carbon\Carbon::now()->toDateTimeString(), 'player_name' => 'Spieler 1', 'player_image_path' => 'uploads/players/player1_201406052250.jpg', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('shots' => 7, 'misses' => 5, 'score' => 80, 'mode_id' => 2, 'event_id' => 1, 'time' => \Carbon\Carbon::now()->toDateTimeString(), 'player_name' => 'Spieler 1', 'player_image_path' => 'uploads/players/player1_201406052250.jpg', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('shots' => 6, 'misses' => 5, 'score' => 200, 'mode_id' => 2, 'event_id' => 1, 'time' => \Carbon\Carbon::now()->toDateTimeString(), 'player_name' => 'Spieler 1', 'player_image_path' => 'uploads/players/player1_201406052250.jpg', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('shots' => 12, 'misses' => 5, 'score' => 500, 'mode_id' => 2, 'event_id' => 1, 'time' => \Carbon\Carbon::now()->toDateTimeString(), 'player_name' => 'Spieler 1', 'player_image_path' => 'uploads/players/player1_201406052250.jpg', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('shots' => 9, 'misses' => 5, 'score' => 350, 'mode_id' => 2, 'event_id' => 1, 'time' => \Carbon\Carbon::now()->toDateTimeString(), 'player_name' => 'Spieler 1', 'player_image_path' => 'uploads/players/player1_201406052250.jpg', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
        );

        // Uncomment the below to run the seeder
        DB::table('statistics')->insert($statistics);
    }
}