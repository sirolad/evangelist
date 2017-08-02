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
    }

    /*
    * Test for less than five repositories.
     */
    public function testLessthan5repos()
    {
      $mock = Mockery::mock('fetch');
      $mock->shouldReceive('getData')
            ->with('username', 'Client')
            ->andReturn(4);

      $this->assertEquals('You need to set forth at dawn!', $this->test->rankEvangelist('username', $mock));
    }


    /*
    * Test for Associate Evangelist.
     */
    public function testJuniorEvangelist()
    {
      $mock = Mockery::mock('fetch');
      $mock->shouldReceive('getData')
            ->with('sirocca', 'Client')
            ->andReturn(6);

      $expected = 'Damn It!!! Please make the world better, Oh Ye Prodigal Evangelist.';

      $this->assertEquals($expected, $this->test->rankEvangelist('sirocca', $mock));
    }

    /*
    * Test for Junior Evangelist.
    */
    public function testAssociateEvangelist()
    {
      $mock = Mockery::mock('fetch');
      $mock->shouldReceive('getData')
      ->with('sirocco', 'Client')
      ->andReturn(12);

      $expected = 'Keep Up The Good Work, I crown you Associate Evangelist.';

      // $this->assertEquals($expected, $this->test->rankEvangelist('sirocco', $mock));
    }

    /*
    * Test for Senior Evangelist.
     */
    public function testMostSeniorEvangelist()
    {
      $mock = Mockery::mock('fetch');
      $mock->shouldReceive('getData')
      ->with('siroccy', 'Client')
      ->andReturn(21);

      $expected = 'Yeah, I crown you Most Senior Evangelist. Thanks for making the world a better place.';

      // $this->assertEquals($expected, $this->test->rankEvangelist('siroccy', $mock));
    }
}
