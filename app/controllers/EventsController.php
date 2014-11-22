<?php

class EventsController extends BaseController {

    protected $events;

    public function __construct(GoalWall\Events\EventRepository $events)
    {
        $this->events = $events;
    }

    public function getIndex()
    {
        $events = $this->events->getAll();

        return View::make('events.index', compact('events'));
    }

    public function getEvent($id)
    {
        //$event = $this->events->getEventWithStatistics($id)->first();
        //$event

        if (is_numeric($id))
            {
                $event = $this->events->getById($id)->first();
            } else {
                $event = $this->events->getBySlug($id)->first();
            }

        $classic = $this->events->getEventWithStatisticsForGameMode($id, 1);
        $sharpshooter = $this->events->getEventWithStatisticsForGameMode($id, 2);

        return View::make('events.show', compact('event', 'classic', 'sharpshooter'));
    }

    public function getCreate()
    {
        $contacts = User::where('id', '!=', Auth::user()->id)->lists('username', 'id');

        return View::make('chats.create', compact('contacts'));
    }

    public function postStoreEvent()
    {

            $chat = new GoalWall\Events\Event;
            $chat->title = 'blub';
            $chat->thumbnail = '';
            $chat->save();

            $this->chats->addContactToEvent(Auth::user()->id, $chat->id);
            $this->chats->addContactToEvent(Input::get('contact_id'), $chat->id);

            return Redirect::route('chats.show', $chat->id);
    }

    public function postAddStatisticToEvent()
    {
        // TODO: Add validation
        $result =  $this->chats->addStatisticToEvent(Input::get('statistic_id'), Input::get('event_id'));

        return Redirect::back();
    }

    public function postRemoveContactFromEvent($contact_id, $chat_id)
    {
        // TODO: Add validation
        $result =  $this->chats->removeContactToEvent(Input::get('contact_id'), Input::get('chat_id'));

        return Redirect::back();
    }

}