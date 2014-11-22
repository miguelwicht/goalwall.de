<?php namespace GoalWall\Modes;

use GoalWall\Core\EloquentBaseRepository;

class ModeRepository extends EloquentBaseRepository
{
    protected $model;

    public function __construct(Mode $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }
/*
    public function getStatisticsForModeAndEvent()
    {
        return $this->model->all();
    }
    */
}