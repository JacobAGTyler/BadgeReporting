<?php
namespace App\Test\TestCase\Shell;

use App\Shell\DatabaseShell;
use Cake\TestSuite\TestCase;

/**
 * App\Shell\DatabaseShell Test Case
 */
class DatabaseShellTest extends TestCase
{

    /**
     * ConsoleIo mock
     *
     * @var \Cake\Console\ConsoleIo|\PHPUnit_Framework_MockObject_MockObject
     */
    public $io;

    /**
     * Test subject
     *
     * @var \App\Shell\DatabaseShell
     */
    public $DatabaseShell;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->io = $this->getMockBuilder('Cake\Console\ConsoleIo')->getMock();
        $this->DatabaseShell = new DatabaseShell($this->io);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DatabaseShell);

        parent::tearDown();
    }

    /**
     * Test build method
     *
     * @return void
     */
    public function testBuild()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test seed method
     *
     * @return void
     */
    public function testSeed()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test password method
     *
     * @return void
     */
    public function testPassword()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
