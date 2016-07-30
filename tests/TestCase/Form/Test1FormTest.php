<?php
namespace App\Test\TestCase\Form;

use App\Form\Test1Form;
use Cake\TestSuite\TestCase;

/**
 * App\Form\Test1Form Test Case
 */
class Test1FormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\Test1Form
     */
    public $Test1;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Test1 = new Test1Form();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Test1);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
