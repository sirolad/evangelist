<?php

namespace Sirolad\Evangelist;

chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

use Sirolad\Evangelist\EvangelistFetcher;

class EvangelistRanker
{
    public function rankEvangelist($username)
    {
        $fetch = new EvangelistFetcher();
        $rank  = $fetch->getData($username);
        switch ($rank) {
            case $rank >= 21:
                echo "Yeah, I crown you Most Senior Evangelist. Thanks for making the world a better place.".PHP_EOL;
                break;
            case $rank >=11:
                echo "Keep Up The Good Work, I crown you Associate Evangelist.".PHP_EOL;
                break;
            case $rank >=5:
                echo "Damn It!!! Please make the world better, Oh Ye Prodigal Evangelist.".PHP_EOL;
                break;
            default:
                echo "You need to have a minimum of 5 repos to be worthy!".PHP_EOL;
                break;
        }
    }
}
