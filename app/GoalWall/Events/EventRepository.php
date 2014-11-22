<?php namespace GoalWall\Events;

use GoalWall\Core\EloquentBaseRepository;

class EventRepository extends EloquentBaseRepository
{
    protected $model;
    protected $statistics;

    public function __construct(Event $model)
    {
        $this->model = $model;
        $this->statistics = new \GoalWall\Statistics\StatisticRepository(new \GoalWall\Statistics\Statistic());
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getEventWithStatistics($id)
    {
        if (is_numeric($id))
        {
            return $this->model->with('statistics')->where('id', '=', $id)->get();
        } else {
            return $this->model->with('statistics')->where('slug', '=', $id)->get();
        }

    }

    public function getEventWithStatisticsForGameMode($id, $mode_id)
    {
            if (is_numeric($id))
            {
                $event = $this->getById($id)->first();
            } else {
                $event = $this->getBySlug($id)->first();
            }

            $statistics = $this->statistics->getModel()->where('mode_id', '=', $mode_id)->where('event_id', '=', $event->id)->orderBy('score', 'desc')->get();

            return $statistics;
    }

    public function addStatisticToEvent($statistic_id, $event_id)
    {
        //return $this->model->find($event_id)->users()->attach($statistic_id);
    }

    public function removeStatisticFromEvent($statistic_id, $event_id)
    {
        //return $this->model->find($event_id)->users()->detach($contact_id);
    }
}