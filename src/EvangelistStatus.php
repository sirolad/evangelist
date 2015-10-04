<?php

namespace Sirolad\Evangelist;

chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

use Sirolad\Evangelist\Ranker;

class EvangelistStatus
{
    public $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function getStatus()
    {
        $evangelist = new Ranker();
        $output = $evangelist->rankEvangelist($this->username);
        return $output;

    }
}
$status = new EvangelistStatus('sirolad');
$status->getStatus();