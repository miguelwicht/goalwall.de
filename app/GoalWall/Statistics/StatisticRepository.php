<?php namespace GoalWall\Statistics;

use GoalWall\Core\EloquentBaseRepository;

class StatisticRepository extends EloquentBaseRepository
{
    protected $model;

    public function __construct(Statistic $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        $statistics = $this->model->with('event')->get();

        return $statistics;
    }

    public function getStatisticsForEvent($id)
    {
        $statistics = $this->model->where('event_id', '=', $id);

        return $statistics;
    }

}