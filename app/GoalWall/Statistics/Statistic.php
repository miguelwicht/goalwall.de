<?php namespace GoalWall\Statistics;

use GoalWall\Core\EloquentBaseModel;

class Statistic extends EloquentBaseModel
{
    protected $table      = 'statistics';
    //protected $with       = ['author'];
    //protected $fillable   = ['author_id', 'title', 'content', 'status', 'laravel_version', 'published_at'];
    //protected $dates      = ['published_at'];
    //protected $softDelete = true;

    protected $validationRules = array();

    public function event()
    {
        return $this->belongsTo('GoalWall\Events\Event', 'event_id');
    }

    public function mode()
    {
        return $this->belongsTo('GoalWall\Modes\Mode', 'mode_id');
    }

    public function save(array $options = array())
    {

        return parent::save($options);
    }
}