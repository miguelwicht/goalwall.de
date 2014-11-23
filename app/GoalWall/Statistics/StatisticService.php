<?php namespace GoalWall\Statistics;

use Carbon\Carbon as Carbon;
use Input;
use Lang;

/**
 * Class StatisticService
 * @package GoalWall\Statistics
 */
class StatisticService {

	/**
	 * @var StatisticRepository
	 */
	protected $statisticRepository;

	/**
	 * @param StatisticRepository $statisticRepository
	 */
	public function __construct(StatisticRepository $statisticRepository)
	{
		$this->statisticRepository = $statisticRepository;
	}

	/**
	 * @param $input
	 * @return Statistic
	 */
	public function add($input)
	{
		$statistic = new Statistic();

		$statistic->mode_id = $input['mode_id'];
		$statistic->shots = $input['shots'];
		$statistic->misses = $input['misses'];
		$statistic->score = $input['score'];
		$statistic->event_id = $input['event_id'];
		$statistic->player_name = Lang::get('shared.unknown_player');
		$statistic->player_image_path = 'uploads/players/player1_201406052250.jpg';
		$statistic->time = Carbon::now()->toDateTimeString();

		$statistic->save();

		return $statistic;
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getById($id)
	{
		return $this->statisticRepository->getModel()->where('id', '=', $id)->firstOrFail();
	}

	/**
	 * @param $event_id
	 * @return mixed
	 */
	public function getLatestWithoutPlayer($event_id)
	{
		return $this->statisticRepository->getModel()->where('event_id', '=', $event_id)->where('updated_player', '=', false)->orderBy('created_at', 'desc')->firstOrFail();
	}

	/**
	 * @param $input
	 * @return mixed
	 */
	public function updatePlayerInfo($input)
	{
		$statistic = $this->statisticRepository->getModel()->where('id', '=', $input['id'])->firstOrFail();
		$statistic->player_name = isset($input['player_name']) ? $input['player_name'] : Lang::get('shared.unknown_player');
		$statistic->updated_player = true;

		$pathToImage = $this->saveImage($input['image']);
		$statistic->player_image_path = $pathToImage ? $pathToImage : $statistic->player_image_path;

		$statistic->save();

		return $statistic;
	}

	/**
	 * @param $image
	 * @return bool|string
	 */
	public function saveImage($image)
	{
		if ( isset($image) )
		{
			$file = $image;
			$name = time() . '-' . $file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();

			$path = '/uploads/players/';
			$rel_path = public_path() . $path;

			$file->move($rel_path, $name);

			return $path . $name;
		}

		return false;
	}

	/**
	 * @param $input
	 * @return mixed
	 */
	public function update($input)
	{
		$statistic = $this->statisticRepository->getModel()->where('id', '=', Input::get('id'))->firstOrFail();

		$statistic->mode_id = $input['mode_id'];
		$statistic->shots = $input['shots'];
		$statistic->misses = $input['misses'];
		$statistic->score = $input['score'];
		$statistic->event_id = $input['event_id'];
		$statistic->player_name = $input['player_name'];
		$statistic->player_image_path = $input['image_path'];

		$pathToImage = $this->saveImage($input['image']);
		$statistic->player_image_path = $pathToImage ? $pathToImage : $statistic->player_image_path;

		$statistic->save();

		return $statistic;
	}
}