<?php

use App\Models\TvData;
use Elvedia\Goutte\Goutte;

Route::get('/', function () {

    $client = Goutte::getNewClient();

    $crawler = $client->request('GET', 'http://tv.aladin.info/tv-program-rts-1');

    $niz = array();

    $crawler->filter('tbody>tr>td')->each(function ($node, $counter = 1) {

        global $niz;

        if ($counter % 2 == 0) {
            $niz[0] = $node->text();
            //$tvData->air_time = $node->text();
        } else {
            $niz[1] = $node->text();
            //$tvData->name = $node->text();
            //$tvData->save();
            //var_dump($tvData);
            //var_dump($niz);

            $tvData = new TvData();

            $tvData->air_time = $niz[0];
            $tvData->title = $niz[1];

            $tvData->save();

            var_dump($tvData);

            $niz = ["",""];
        }

        $counter++;
    });
});
