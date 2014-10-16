<?php namespace App\Controllers\Ui;

use App\Repositories\TvStationRepositoryInterface;
use Illuminate\Support\Facades\View;

/**
 * Class UiBaseController
 * @package App\Controllers\Ui
 *
 * Controller designed for providing basic CRUD functionality for system core models
 */
class UiBaseController extends \BaseController
{
    function __construct(TvStationRepositoryInterface $tvStationRepository)
    {
        $this->TvStationRepository = $tvStationRepository;
    }

    /**
     * @return mixed Show page populated with all tv stations
     */
    public function showHome()
    {
        return View::make('ui.page.index')
            ->with('tvStations', $this->TvStationRepository->getAll());
    }

}