<?php

namespace Sirolad\Evangelist;

use Sirolad\Evangelist\EvangelistRanker;

class EvangelistStatus
{
    public $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function getStatus()
    {
        $evangelist = new EvangelistRanker();
        $output = $evangelist->rankEvangelist($this->username);
        return $output;
    }
}
