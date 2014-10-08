<?php namespace App\Controllers\Backend;

use App\Repository\Backend\ITvStationRepository;
use Illuminate\Support\Facades\View;

/**
 * Class IndexController
 * @package App\Controllers\Backend
 * @author Milan Batica
 *
 * Default backend controller
 * Will handle TvStation creation and listing for now
 *
 */
class IndexController extends \BaseController
{

    public function __construct(ITvStationRepository $tvStationRepository)
    {
        $this->tvStation = $tvStationRepository;
    }


    /**
     * @return View
     *
     * Show create TvStation form
     *
     * TODO: Change if decide to move TvStation creation and listing to another controller
     */
    public function getIndex()
    {
        return View::make('backend.index.index')
                        ->with('tvStationList', $this->tvStation->getTvStationList());
    }


    public function postTvStation()
    {

    }

}