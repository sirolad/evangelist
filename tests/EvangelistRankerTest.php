<?php

namespace Sirolad\Evangelist\Test;

chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

use Sirolad\Evangelist\EvangelistRanker;
use Sirolad\Evangelist\EvangelistFetcher;

class EvangelistRankerTest extends \PHPUnit_Framework_TestCase
{
    public function testLessthan5repos()
    {
        $test = new EvangelistRanker();
        $result = $test->rankEvangelist('andela-womokoro');
        $this->assertEquals('You need to set forth at dawn!', $result);
    }

    public function testJuniorEvangelist()
    {
        $test = new EvangelistRanker();
        $result = $test->rankEvangelist('andela-sakande');
        $this->assertEquals('Damn It!!! Please make the world better, Oh Ye Prodigal Evangelist.', $result);
    }

    public function testAssociateEvangelist()
    {
        $test = new EvangelistRanker();
        $result = $test->rankEvangelist('andela-fokosun');
        $this->assertEquals('Keep Up The Good Work, I crown you Associate Evangelist.', $result);
    }

    public function testMostSeniorEvangelist()
    {
        $test = new EvangelistRanker();
        $result = $test->rankEvangelist('busayo');
        $this->assertEquals('Yeah, I crown you Most Senior Evangelist. Thanks for making the world a better place.', $result);
    }
}
