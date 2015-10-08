<?php

/**
 * These are the test for the core files.
 *
 * @package Open Source Evangelist Agnostic Package
 * @author Surajudeen AKANDE <surajudeen.akande@andela.com>
 * @license MIT <https://opensource.org/licenses/MIT>
 * @link http://www.github.com/andela-sakande
 */

namespace Sirolad\Evangelist\Test;

use Sirolad\Evangelist\EvangelistFetcher;
use GuzzleHttp\Client;

/*
* EvangelistFetcherTest is the test for the EvangelistFetcher Class.
 */
class EvangelistFetcherTest extends \PHPUnit_Framework_TestCase
{
    //class property
    protected $testFetcher;

    //instantiate the EvangelistFetcher Class
    public function setUp()
    {
        $this->testFetcher = new EvangelistFetcher();
    }

    //destroy the EvangelistFetcher Class
    public function tearDown()
    {
        unset($this->testFetcher);
    }

    /**
     * @throws Sirolad\Evangelist\Exceptions\NullUserException
     */
    public function testNullUserException()
    {
        $this->setExpectedException('Sirolad\Evangelist\Exceptions\NullUserException');
        $this->testFetcher->getData('', new Client);
    }

    /*
    * Test for checking unregistered users input.
     */
    public function testUnregisteredUser()
    {
        $this->assertEquals('Unregistered User!', $this->testFetcher->getData('sirolady', new Client));
    }

    /*
    * Test for valid user.
     */
    public function testValidUser()
    {
        $this->assertTrue(is_integer($this->testFetcher->getData('sirolad', new Client)));
    }
}
