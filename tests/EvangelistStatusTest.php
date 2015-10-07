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

use Sirolad\Evangelist\EvangelistStatus;

/*
EvangelistStatusTest is the test for the EvangelistStatus Class.
 */
class EvangelistStatusTest extends \PHPUnit_Framework_TestCase
{
    /*
    * Test for output less than 5 repositories.
     */
    public function testLessthan5repos()
    {
        $test = new EvangelistStatus('andela-womokoro');
        $result = $test->getStatus();
        $this->assertEquals('You need to set forth at dawn!', $result);
    }
    /*
    * Test for output more than 5 repositories.
     */
    public function testJuniorEvangelist()
    {
        $test = new EvangelistStatus('andela-sakande');
        $result = $test->getStatus();
        $this->assertEquals('Damn It!!! Please make the world better, Oh Ye Prodigal Evangelist.', $result);
    }
     /*
    * Test for output more than 11 repositories.
     */
    public function testAssociateEvangelist()
    {
        $test = new EvangelistStatus('andela-vdugeri');
        $result = $test->getStatus();
        $this->assertEquals('Keep Up The Good Work, I crown you Associate Evangelist.', $result);
    }
     /*
    * Test for output more than 21 repositories.
     */
    public function testMostSeniorEvangelist()
    {
        $test = new EvangelistStatus('andela');
        $result = $test->getStatus();
        $this->assertEquals('Yeah, I crown you Most Senior Evangelist. Thanks for making the world a better place.', $result);
    }
}
