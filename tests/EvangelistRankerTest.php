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

use Sirolad\Evangelist\EvangelistRanker;
use Sirolad\Evangelist\EvangelistFetcher;
/*
EvangelistRankerTest is the test for the EvangelistRanker Class.
 */
class EvangelistRankerTest extends \PHPUnit_Framework_TestCase
{
    public function testLessthan5repos()
    {
        /*
        * Test for less than five repositories.
         */
        $test = new EvangelistRanker();
        $result = $test->rankEvangelist('andela-womokoro');
        $this->assertEquals('You need to set forth at dawn!', $result);
    }

    public function testJuniorEvangelist()
    {
        /*
        * Test for Junior Evangelist.
         */
        $test = new EvangelistRanker();
        $result = $test->rankEvangelist('andela-sakande');
        $this->assertEquals('Damn It!!! Please make the world better, Oh Ye Prodigal Evangelist.', $result);
    }

    public function testAssociateEvangelist()
    {
        /*
        * Test for Associate Evangelist.
         */
        $test = new EvangelistRanker();
        $result = $test->rankEvangelist('andela-fokosun');
        $this->assertEquals('Keep Up The Good Work, I crown you Associate Evangelist.', $result);
    }

    public function testMostSeniorEvangelist()
    {
        /*
        * Test for Senior Evangelist.
         */
        $test = new EvangelistRanker();
        $result = $test->rankEvangelist('busayo');
        $this->assertEquals('Yeah, I crown you Most Senior Evangelist. Thanks for making the world a better place.', $result);
    }
}
