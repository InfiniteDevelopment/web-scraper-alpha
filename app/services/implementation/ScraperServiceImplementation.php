<?php namespace App\Services;

use App\Models\TvSlot;
use App\Repositories\TvSlotRepository;
use Elvedia\Goutte\Goutte;

class ScraperServiceImplementation implements ScraperService
{
    function __construct()
    {
        $this->scraperClient = Goutte::getNewClient();
        $this->slotTempContainer = ["", ""];
    }

    /**
     * @param $tvStation TvStation object
     * @return mixed Scrape designated url
     */
    public function scrape($tvStation)
    {
        //var_dump($tvStation);

        $crawler = $this->scraperClient->request("GET", $tvStation->url);

        $crawler->filter('tbody>tr>td')->each(function ($node, $counter = 1, $tvStationId = 1) {
            global $slotTempContainer;
            global $tvStation;

            if ($counter % 2 == 0) {
                $slotTempContainer[0] = $node->text();
            } else {
                $slotTempContainer[1] = $node->text();

                $tvSlot = new TvSlot();

                $tvSlot->air_time = $slotTempContainer[0];
                $tvSlot->title = $slotTempContainer[1];
                $tvSlot->tv_station_id = $tvStationId;

                $tvSlot->save();

                //var_dump($slotTempContainer);

                $slotTempContainer = ["", ""];
            }
        });


    }
}