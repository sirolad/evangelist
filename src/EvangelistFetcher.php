<?php

namespace Sirolad\Evangelist;

use Dotenv\Dotenv;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Sirolad\Evangelist\Exceptions\NullUserException;

class EvangelistFetcher
{
    public static function loadDotenv()
    {
        $dotenv = new Dotenv(__DIR__ . '/..');
        $dotenv->load();
    }

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
