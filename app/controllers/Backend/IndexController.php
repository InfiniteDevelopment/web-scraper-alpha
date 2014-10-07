<?php namespace App\Controllers\Backend;

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
    /**
     * @return View
     *
     * Show create TvStation form
     *
     * TODO: Change if decide to move TvStation creation and listing to another controller
     */
    public function getIndex()
    {
        return View::make('backend.index.index');
    }


    public function postTvStation()
    {

    }

}