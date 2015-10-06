<?php

namespace Sirolad\Evangelist\Test;

use Sirolad\Evangelist\EvangelistFetcher;

class NeweTest extends \PHPUnit_Framework_TestCase
{
    public function testNullUserException()
    {
        $testFetcher = new EvangelistFetcher();
        $result = $testFetcher->getData('');
        $this->assertEquals('You have provided an empty username.Kindly input a valid one.', $result);
    }

}
