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
    //class property
    protected $statustest;

    //instantiate the EvangelistStatus Class with argument
    public function setUp()
    {
        $this->statustest = new EvangelistStatus(2345678);
    }

    //destroy the EvangelistStatus Class
    public function tearDown()
    {
        unset($this->statustest);
    }

    /*
    * Test for less string output.
     */
    public function testStatusOutput()
    {
        $this->assertTrue(is_string($this->statustest->getStatus()));
    }
}
