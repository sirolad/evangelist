<?php

/**
 * These are the test for the core files.
 *
 *@package Open Source Evangelist Agnostic Package
 *@author Surajudeen AKANDE <surajudeen.akande@andela.com>
 *@license MIT <https://opensource.org/licenses/MIT>
 *@link http://www.github.com/andela-sakande
 */

namespace Sirolad\Evangelist\Test;

use Sirolad\Evangelist\EvangelistFetcher;

/*
EvangelistFetcherTest is the test for the EvangelistFetcher Class.
 */
class EvangelistFetcherTest extends \PHPUnit_Framework_TestCase
{
    public function testNullUserException()
    {
        /*
        * Test for checking empty input.
         */
        $testFetcher = new EvangelistFetcher();
        $result = $testFetcher->getData('');
        $this->assertEquals('You have provided an empty username.Kindly input a valid one.', $result);
    }

    public function testUnregisteredUser()
    {
        /*
        * Test for checking unregistered users input.
         */
        $testFetcher = new EvangelistFetcher();
        $result = $testFetcher->getData('sirolady');
        $this->assertEquals('Unregistered User!', $result);
    }

    public function testValidUser()
    {
        /*
        * Test for valid user.
         */
        $testFetcher = new EvangelistFetcher();
        $result = $testFetcher->getData('sirolad');
        $this->assertTrue(is_integer($result));
    }
}
