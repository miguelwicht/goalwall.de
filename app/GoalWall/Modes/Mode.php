<?php namespace GoalWall\Modes;

use GoalWall\Core\EloquentBaseModel;

class Mode extends EloquentBaseModel
{
    protected $table      = 'modes';
    //protected $with       = ['author'];
    //protected $fillable   = ['author_id', 'title', 'content', 'status', 'laravel_version', 'published_at'];
    //protected $dates      = ['published_at'];
    //protected $softDelete = true;

    protected $validationRules = array();

    public function statistics()
    {
        return $this->hasMany('GoalWall\Statistics\Statistic', 'mode_id');
    }

    public function save(array $options = array())
    {

        return parent::save($options);
    }
}