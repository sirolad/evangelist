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

use Dotenv\Dotenv;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Sirolad\Evangelist\Exceptions\NullUserException;

/*
* EvangelistFetcher is the main class that connects to Github API using GuzzleHttp for request.
 */

class EvangelistFetcher
{
    /*
     * loadDotenv connects to the .env file in the root directory
     */
    public static function loadDotenv()
    {
        $dotenv = new Dotenv(__DIR__ . '/..');
        $dotenv->load();
    }

    /**
     * Returns the number of public repositories of the searched username on GitHub
     *
     * @param  string $username Supply the username searched for on GitHub
     * @return integer
     * @throws NullUserException
     * @throws ClientException
     */

    public function getData($username, Client $client)
    {
        static::loadDotenv();
        if (empty($username)) {
                throw new NullUserException("You have provided an empty username.Kindly input a valid one.");
        }
        try {
            $response = $client->request('GET', 'https://api.github.com/users/'.$username. '?client_id=' .getenv('Client_ID') . '&client_secret=' .getenv('Client_SECRET'));
            $result = json_decode($response->getBody());

            return $result->public_repos;
        } catch (NullUserException $e) {
             return $e->getExceptionMessage();
        } catch (ClientException $e) {
            return "Unregistered User!";
        }
    }
}
