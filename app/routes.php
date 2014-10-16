<?php

use App\Models\TvSlot;
use Elvedia\Goutte\Goutte;


/**
 * Development log
 *
 * TODO:    Find solution for model relationship
            It should be TvStation->hasMany(TvSlot)
 *
 *
 */


Route::group(array('prefix' => 'admin'), function() {

    Route::get('',      array('as' => 'admin.index', 'uses' => 'App\Controllers\Ui\UiBaseController@showHome'));

});


Route::get('/', function () {

    $client = Goutte::getNewClient();

    $crawler = $client->request('GET', 'http://tv.aladin.info/tv-program-rts-1');

    $niz = array();

    $crawler->filter('tbody>tr>td')->each(function ($node, $counter = 1) {

        global $niz;

        if ($counter % 2 == 0) {
            $niz[0] = $node->text();
        } else {
            $niz[1] = $node->text();

            $tvSlot = new TvSlot();

            $tvSlot->air_time = $niz[0];
            $tvSlot->title = $niz[1];

            //$tvSlot->save();

            var_dump($niz);

            $niz = ["",""];
        }

        $counter++;
    });
});
