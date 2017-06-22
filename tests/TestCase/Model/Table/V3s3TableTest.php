<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\V3s3Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\V3s3Table Test Case
 */
class V3s3TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\V3s3Table
     */
    public $V3s3;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.v3s3'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('V3s3') ? [] : ['className' => V3s3Table::class];
        $this->V3s3 = TableRegistry::get('V3s3', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->V3s3);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test defaultConnectionName method
     *
     * @return void
     */
    public function testDefaultConnectionName()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
