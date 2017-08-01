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

use Mockery;
use Sirolad\Evangelist\EvangelistRanker;
use Sirolad\Evangelist\EvangelistFetcher;

/*
* EvangelistRankerTest is the test for the EvangelistRanker Class.
 */
class EvangelistRankerTest extends \PHPUnit_Framework_TestCase
{
    //class property
    protected $test;

    protected $mock;

    //instantiate the EvangelistRanker Class
    public function setUp()
    {
        $this->test = new EvangelistRanker();
        $this->mock = Mockery::mock($this->test);
    }

    //destroy the EvangelistRanker Class
    public function tearDown()
    {
        unset($this->test);
        // Mockery::close();
    }

    /*
    * Test for less than five repositories.
     */
    public function testLessthan5repos()
    {
        $mock = $this->mock->shouldReceive('rankEvangelist')
                ->once()
                ->with('oluseyearinde')
                ->andReturn('You need to set forth at dawn!');

        $this->assertInternalType('object', $mock);
    }

    /*
    * Test for Junior Evangelist.
     */
    public function testJuniorEvangelist()
    {
        $mock = $this->mock->shouldReceive('rankEvangelist')
                ->once()
                ->with('sirolad')
                ->andReturn('Damn It!!! Please make the world better, Oh Ye Prodigal Evangelist.');

        $this->assertInternalType('object', $mock);
    }

    /*
    * Test for Associate Evangelist.
     */
    public function testAssociateEvangelist()
    {
        $mock = $this->mock->shouldReceive('rankEvangelist')
                ->once()
                ->with('abbysugar')
                ->andReturn('Keep Up The Good Work, I crown you Associate Evangelist.');

        $this->assertInternalType('object', $mock);
    }

    /*
    * Test for Senior Evangelist.
     */
    public function testMostSeniorEvangelist()
    {
        $mock = $this->mock->shouldReceive('rankEvangelist')
                ->once()
                ->with('oluseyearinde')
                ->andReturn('Yeah, I crown you Most Senior Evangelist. Thanks for making the world a better place.');

        $this->assertInternalType('object', $mock);
    }
}
