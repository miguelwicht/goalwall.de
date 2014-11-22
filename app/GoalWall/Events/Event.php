<?php namespace GoalWall\Events;

use GoalWall\Core\EloquentBaseModel;

class Event extends EloquentBaseModel
{
    protected $table      = 'events';
    //protected $with       = ['author'];
    //protected $fillable   = ['author_id', 'title', 'content', 'status', 'laravel_version', 'published_at'];
    //protected $dates      = ['published_at'];
    //protected $softDelete = true;

    protected $validationRules = array();

    public function statistics()
    {
        return $this->hasMany('GoalWall\Statistics\Statistic', 'event_id')->groupBy('mode_id')->orderBy('score');
    }

    // public function users()
    // {
    //     return $this->belongsToMany('User', 'chat_user', 'chat_id', 'user_id');
    // }

    // public function author()
    // {
    //     return $this->belongsTo('Lio\Accounts\User', 'author_id');
    // }

    // public function tags()
    // {
    //     return $this->belongsToMany('Lio\Tags\Tag', 'article_tag', 'article_id', 'tag_id');
    // }

    public function save(array $options = array())
    {

        return parent::save($options);
    }
}