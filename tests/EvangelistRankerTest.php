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
    /*
    * Test for less than five repositories.
     */
    public function testLessthan5repos()
    {
        $test = new EvangelistRanker();
        $result = $test->rankEvangelist('andela-womokoro');
        $this->assertEquals('You need to set forth at dawn!', $result);
    }

    /*
    * Test for Junior Evangelist.
     */
    public function testJuniorEvangelist()
    {
        $test = new EvangelistRanker();
        $result = $test->rankEvangelist('andela-sakande');
        $this->assertEquals('Damn It!!! Please make the world better, Oh Ye Prodigal Evangelist.', $result);
    }

    /*
    * Test for Associate Evangelist.
     */
    public function testAssociateEvangelist()
    {
        $test = new EvangelistRanker();
        $result = $test->rankEvangelist('andela-vdugeri');
        $this->assertEquals('Keep Up The Good Work, I crown you Associate Evangelist.', $result);
    }

    /*
    * Test for Senior Evangelist.
     */
    public function testMostSeniorEvangelist()
    {
        $test = new EvangelistRanker();
        $result = $test->rankEvangelist('busayo');
        $this->assertEquals('Yeah, I crown you Most Senior Evangelist. Thanks for making the world a better place.', $result);
    }
}
