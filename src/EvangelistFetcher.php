<?php

namespace Sirolad\Evangelist;

chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

use Dotenv\Dotenv;
use GuzzleHttp\Client;
use Sirolad\Evangelist\Exceptions\NullUserException;
use Sirolad\Evangelist\Exceptions\NotFoundException;

class EvangelistFetcher
{
    public static function loadDotenv()
    {
        $dotenv = new Dotenv(__DIR__ . '/../../');
        $dotenv->load();
    }

    public static function getData($username)
    {
        try {
            if (empty($username)) {
                throw new NullUserException();
            }

            $client   = new Client();
            $response = $client->get('https://api.github.com/users/'.$username. '?client_id=' .getenv('Client_ID') . '&client_secret=' .getenv('Client_SECRET'));
            $expose = ($response->json());
            // if ($expose['message']) {
            //     throw new NotFoundException();
            // }
            if (($expose['public_repos']) <= 1) {
                echo $expose['public_repos'].' repository found!'.PHP_EOL;
            } else {
                echo $expose['public_repos'].' repositories found!'.PHP_EOL;
            }
            return $expose['public_repos'];

        } catch (NotFoundException $e) {
            return $e->message();

        } catch (NullUserException $e) {
            return $e->message();
        }
    }
}
