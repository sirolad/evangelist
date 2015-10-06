<?php
namespace Sirolad\Evangelist;

use Sirolad\Evangelist\EvangelistFetcher;
use GuzzleHttp\Exception\ClientException;
use Sirolad\Evangelist\Exceptions\NullUserException;

class EvangelistRanker
{
    public function rankEvangelist($username)
    {
        try {
            if (empty($username)) {
                throw new NullUserException();
            }
            $fetch = new EvangelistFetcher();
            $rank = $fetch->getData($username);
        } catch (ClientException $e) {
            return "Unregistered User!";
        } catch (NullUserException $e) {
            return $e->message();
        }

        switch ($rank) {
            case $rank < 5:
                return "You need to set forth at dawn!";
                break;

            case $rank >= 21:
                return "Yeah, I crown you Most Senior Evangelist. Thanks for making the world a better place.";
                break;

            case $rank >= 11:
                return "Keep Up The Good Work, I crown you Associate Evangelist.";
                break;

            case $rank >= 5:
                return "Damn It!!! Please make the world better, Oh Ye Prodigal Evangelist.";
                break;
        }
    }
}
