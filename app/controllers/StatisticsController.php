<?php

/**
 * Class StatisticsController
 */
class StatisticsController extends BaseController {

	/**
	 * @var \GoalWall\Statistics\StatisticService
	 */
	protected $statisticService;

	/**
	 * @param \GoalWall\Statistics\StatisticService $statisticService
	 */
	public function __construct(GoalWall\Statistics\StatisticService $statisticService)
    {
	    $this->statisticService = $statisticService;
    }

	/**
	 * @return json
	 */
	public function postStore()
    {
        try
        {
	        $statistic = $this->statisticService->add(Input::all());
        }
        catch (Exception $e)
        {
	        return json_encode(array('status' => 'error', 'message' => 'Statistic could not be saved!'));
        }

        return json_encode($statistic->toArray());
    }


	/**
	 * @param $id
	 * @return \Illuminate\View\View
	 */
	public function getEdit($id)
    {
	    try
	    {
		    $statistic = $this->statisticService->getById($id);
	    }
		catch(Exception $e)
		{
			App::abort(404);
		}

        return View::make('statistics.edit', compact('statistic'));
    }

	/**
	 * @return \Illuminate\View\View
	 */
	public function getLatest($event_id)
    {
        $statistic = $this->statisticService->getLatestWithoutPlayer($event_id);

        return View::make('statistics.edit', compact('statistic'));
    }

	/**
	 *
	 */
	public function updatePlayer()
	{
		$input = Input::all();
		$statistic = $this->statisticService->updatePlayerInfo($input);

		return Redirect::route('statistics.latest', array($statistic->event_id));
	}

	/**
	 *
	 */
	public function postUpdate()
    {
		$statistic = $this->statisticService->update(Input::all());

	    return json_encode($statistic);
    }

}