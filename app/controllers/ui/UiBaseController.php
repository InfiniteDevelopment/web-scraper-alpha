<?php namespace App\Controllers\Ui;

use App\Repositories\TvSlotRepository;
use App\Repositories\TvStationRepository;
use App\Services\ScraperService;
use Illuminate\Support\Facades\View;

/**
 * Class UiBaseController
 * @package App\Controllers\Ui
 *
 * Controller designed for providing basic CRUD functionality for system core models
 */
class UiBaseController extends \BaseController
{
    function __construct(TvStationRepository $tvStationRepository,
                         TvSlotRepository $tvSlotRepositoryInterface,
                         ScraperService $scraperService)
    {
        $this->tvStationRepository = $tvStationRepository;
        $this->tvSlotRepository = $tvSlotRepositoryInterface;
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

    /**
     * @return Object
     * Find TvSlot by id
     */
    public function fetch()
    {
        $this->scraperService->scrape($this->tvStationRepository->findById(1));
    }

    public function deleteTvSlotByDate()
    {
        $this->tvSlotRepository->deleteSlotsByDate(date('Y-m-d'),1);
    }

}