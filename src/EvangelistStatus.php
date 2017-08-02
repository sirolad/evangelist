<?php

/**
 * This package fetches the data of requested individual using the Github API and ranks the Individual into
 * categories based on the number of public repositories the individual possesses.
 * @package Open Source Evangelist Agnostic Package
 * @author Surajudeen AKANDE <surajudeen.akande@andela.com>
 * @license MIT <https://opensource.org/licenses/MIT>
 * @link http://www.github.com/andela-sakande
 **/

namespace Sirolad\Evangelist;

use Sirolad\Evangelist\EvangelistRanker;
use Sirolad\Evangelist\EvangelistFetcher;

/*
* EvangelistStatus is the main class that finally outputs the rank of a requested repository.
 */
class EvangelistStatus
{
    /**
     * @var string username of the requested Github account.
     */
    public $username;

    /**
     * Constructor.
     *
     * @param string $username of the request. the ID of this action
    */
    public function __construct($username)
    {
        $this->username = $username;
    }

    /**
     * Returns the status of the request.
     *
     * @return string the ranked output of the requested account.
     */
    public function getStatus()
    {
        $evangelist = new EvangelistRanker();
        $fetch = new EvangelistFetcher();
        return $evangelist->rankEvangelist($this->username, $fetch);
    }
}
