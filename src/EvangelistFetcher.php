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

use Dotenv\Dotenv;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Sirolad\Evangelist\Exceptions\NullUserException;

/*
EvangelistFetcher is the main class that connect to Github API using GuzzleHttp for request.
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
     *
     */

    public function getData($username)
    {
        static::loadDotenv();
        try {
            if (empty($username)) {
                throw new NullUserException();
            }
            $client   = new Client();
            $response = $client->get('https://api.github.com/users/'.$username. '?client_id=' .getenv('Client_ID') . '&client_secret=' .getenv('Client_SECRET'));
            return $response->json()['public_repos'];
        } catch (ClientException $e) {
            return "Unregistered User!";

        } catch (NullUserException $e) {
            return $e->message();
        }
    }
}
