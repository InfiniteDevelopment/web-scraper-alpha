<?php

use Elvedia\Goutte\Goutte;

Route::get('/', function () {

    $client = Goutte::getNewClient();

    $crawler = $client->request('GET', 'http://tv.aladin.info/tv-program-rts-1');

    $tvData = new TvData;

    $crawler->filter('tbody>tr>td')->each(function ($node, $counter = 1) {

        global $tvData;

        if ($counter % 2 == 0) {
            $tvData->time = $node->text();
        } else {
            $tvData->name = $node->text();
            $tvData->save();
            var_dump($tvData);
        }
        $counter++;
    });
});
