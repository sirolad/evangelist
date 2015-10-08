<?php

/**
 * This package fetches the data of requested individual using the Github API and ranks the Individual into
 * categories based on the number of public repositories the individual possesses.
 *@package Open Source Evangelist Agnostic Package
 *@author Surajudeen AKANDE <surajudeen.akande@andela.com>
 *@license MIT <https://opensource.org/licenses/MIT>
 *@link http://www.github.com/andela-sakande
 **/
namespace Sirolad\Evangelist;

use Sirolad\Evangelist\EvangelistFetcher;
use GuzzleHttp\Exception\ClientException;
use Sirolad\Evangelist\Exceptions\NullUserException;

/*
EvangelistRanker is the main class that perfoms the logic of ranking requested repository.
 */

class EvangelistRanker
{
    /**
     * Returns the rank of requested repository into Senior, Associate and Junior Evangelists
     *
     * @param  string $username Supply the username searched for on GitHub
     * @return string
     * @throws NullUserException
     * @throws ClientException
     *
     */
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
