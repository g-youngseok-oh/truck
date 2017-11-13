<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MCategoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MCategoryTable Test Case
 */
class MCategoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MCategoryTable
     */
    public $MCategory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.m_category'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MCategory') ? [] : ['className' => MCategoryTable::class];
        $this->MCategory = TableRegistry::get('MCategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MCategory);

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
}
