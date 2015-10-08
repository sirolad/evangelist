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

use Sirolad\Evangelist\EvangelistRanker;
use Sirolad\Evangelist\EvangelistFetcher;

/*
* EvangelistRankerTest is the test for the EvangelistRanker Class.
 */
class EvangelistRankerTest extends \PHPUnit_Framework_TestCase
{
    //class property
    protected $test;

    //instantiate the EvangelistRanker Class
    public function setUp()
    {
        $this->test = new EvangelistRanker();
    }

    //destroy the EvangelistRanker Class
    public function tearDown()
    {
        unset($this->test);
    }
    /*
    * Test for less than five repositories.
     */
    public function testLessthan5repos()
    {
        $this->assertEquals('You need to set forth at dawn!', $this->test->rankEvangelist('andela-womokoro'));
    }

    /*
    * Test for Junior Evangelist.
     */
    public function testJuniorEvangelist()
    {
        $tester = 'Damn It!!! Please make the world better, Oh Ye Prodigal Evangelist.';
        $this->assertEquals($tester, $this->test->rankEvangelist('andela-sakande'));
    }

    /*
    * Test for Associate Evangelist.
     */
    public function testAssociateEvangelist()
    {
        $tester = 'Keep Up The Good Work, I crown you Associate Evangelist.';
        $this->assertEquals($tester, $this->test->rankEvangelist('andela-vdugeri'));
    }

    /*
    * Test for Senior Evangelist.
     */
    public function testMostSeniorEvangelist()
    {
        $tester = 'Yeah, I crown you Most Senior Evangelist. Thanks for making the world a better place.';
        $this->assertEquals($tester, $this->test->rankEvangelist('busayo'));
    }
}
