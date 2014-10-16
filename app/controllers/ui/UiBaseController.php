<?php namespace App\Controllers\Ui;

use App\Repositories\TvStationRepositoryInterface;
use App\Services\ScraperServiceInterface;
use Illuminate\Support\Facades\View;

/**
 * Class UiBaseController
 * @package App\Controllers\Ui
 *
 * Controller designed for providing basic CRUD functionality for system core models
 */
class UiBaseController extends \BaseController
{
    function __construct(TvStationRepositoryInterface $tvStationRepository,
                         ScraperServiceInterface $scraperService)
    {
        $this->tvStationRepository = $tvStationRepository;
        $this->scraperService = $scraperService;
    }

    /**
     * @return mixed Show page populated with all tv stations
     */
    public function showHome()
    {
        return View::make('ui.page.index')
            ->with('tvStations', $this->tvStationRepository->getAll());
    }

    public function fetch()
    {
        $this->scraperService->scrape($this->tvStationRepository->findById(1));
    }

}