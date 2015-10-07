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
    /*
    * Test for checking empty input.
    */
    public function testNullUserException()
    {
        $testFetcher = new EvangelistFetcher();
        $result = $testFetcher->getData('');
        $this->assertEquals('You have provided an empty username.Kindly input a valid one.', $result);
    }

    /*
    * Test for checking unregistered users input.
     */
    public function testUnregisteredUser()
    {
        $testFetcher = new EvangelistFetcher();
        $result = $testFetcher->getData('sirolady');
        $this->assertEquals('Unregistered User!', $result);
    }

    /*
    * Test for valid user.
     */
    public function testValidUser()
    {
        $testFetcher = new EvangelistFetcher();
        $result = $testFetcher->getData('sirolad');
        $this->assertTrue(is_integer($result));
    }
}
