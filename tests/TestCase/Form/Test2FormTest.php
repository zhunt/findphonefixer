<?php
namespace App\Test\TestCase\Form;

use App\Form\Test2Form;
use Cake\TestSuite\TestCase;

/**
 * App\Form\Test2Form Test Case
 */
class Test2FormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\Test2Form
     */
    public $Test2;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Test2 = new Test2Form();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Test2);

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
