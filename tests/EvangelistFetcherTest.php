<?php

namespace Sirolad\Evangelist\Test;

use Sirolad\Evangelist\EvangelistFetcher;

class EvangelistFetcherTest extends \PHPUnit_Framework_TestCase
{
    public function testNullUserException()
    {
        $testFetcher = new EvangelistFetcher();
        $result = $testFetcher->getData('');
        $this->assertEquals('You have provided an empty username.Kindly input a valid one.', $result);
    }

    public function testUnregisteredUser()
    {
        $testFetcher = new EvangelistFetcher();
        $result = $testFetcher->getData('sirolady');
        $this->assertEquals('Unregistered User!', $result);
    }

    public function testValidUser()
    {
        $testFetcher = new EvangelistFetcher();
        $result = $testFetcher->getData('sirolad');
        $this->assertTrue(is_integer($result));
    }
}
