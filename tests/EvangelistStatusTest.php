<?php

namespace Sirolad\Evangelist\Test;

chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

use Sirolad\Evangelist\EvangelistStatus;

class EvangelistStatusTest extends \PHPUnit_Framework_TestCase
{
    public function testLessthan5repos()
    {
        $test = new EvangelistStatus('andela-womokoro');
        $result = $test->getStatus();
        $this->assertEquals('You need to set forth at dawn!', $result);
    }

    public function testJuniorEvangelist()
    {
        $test = new EvangelistStatus('andela-sakande');
        $result = $test->getStatus();
        $this->assertEquals('Damn It!!! Please make the world better, Oh Ye Prodigal Evangelist.', $result);
    }

    public function testAssociateEvangelist()
    {
        $test = new EvangelistStatus('andela-fokosun');
        $result = $test->getStatus();
        $this->assertEquals('Keep Up The Good Work, I crown you Associate Evangelist.', $result);
    }

    public function testMostSeniorEvangelist()
    {
        $test = new EvangelistStatus('andela');
        $result = $test->getStatus();
        $this->assertEquals('Yeah, I crown you Most Senior Evangelist. Thanks for making the world a better place.', $result);
    }
}
