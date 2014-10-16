<?php namespace App\Services;

/**
 * Interface GenericScraperServiceInterface
 * @package App\Service
 *
 * Contains generic methods related to web scraping
 *
 */
interface GenericScraperServiceInterface
{

    /**
     * @param $tvStation TvStation object
     * @return mixed Scrape designated url
     */
    public function scrape($tvStation);
}