<?php

class StatisticsController extends BaseController {

    protected $statistics;

    public function __construct(GoalWall\Statistics\StatisticRepository $statistics)
    {
        $this->statistics = $statistics;
    }

    public function postStore()
    {
        //return "hello world";

        $statistic = new \GoalWall\Statistics\Statistic();

        $statistic->mode_id = Input::get('mode_id');
        $statistic->shots = Input::get('shots');
        $statistic->misses = Input::get('misses');
        $statistic->score = Input::get('score');
        $statistic->event_id = Input::get('event_id');
        $statistic->player_name = 'Spieler 1';
        $statistic->player_image_path = 'uploads/players/player1_201406052250.jpg';
        $statistic->time = \Carbon\Carbon::now()->toDateTimeString();

        $statistic->save();

        return var_dump($statistic);
    }


    public function getEdit($id)
    {
        $statistic = $this->statistics->getModel()->where('id', '=', $id)->first();

        return View::make('statistics.edit', compact('statistic'));
    }

    public function getLatest()
    {
        $statistic = $this->statistics->getModel()->orderBy('id', 'desc')->limit(1)->first();

        return View::make('statistics.edit', compact('statistic'));
    }

    public function postUpdate()
    {
        $statistic = $this->statistics->getModel()->where('id', '=', Input::get('id'))->first();
        /*
        $statistic->mode_id = Input::get('mode_id');
        $statistic->shots = Input::get('shots');
        $statistic->misses = Input::get('misses');
        $statistic->score = Input::get('score');
        $statistic->event_id = Input::get('event_id');
        */
        $statistic->player_name = Input::get('player_name');
        $statistic->player_image_path = 'uploads/players/player1_201406052250.jpg';

        if (Input::hasFile('image'))
        {
            $file = Input::file('image');
            $name = time() . '-' . $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            $path =  '/uploads/players/';
            $rel_path = public_path() . $path;

            $file->move($rel_path, $name);

            $statistic->player_image_path = $path . $name;
        }

        $statistic->save();
    }

}