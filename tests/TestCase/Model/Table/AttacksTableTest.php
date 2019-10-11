<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AttacksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AttacksTable Test Case
 */
class AttacksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AttacksTable
     */
    public $Attacks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Attacks',
        'app.Pokemon'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Attacks') ? [] : ['className' => AttacksTable::class];
        $this->Attacks = TableRegistry::getTableLocator()->get('Attacks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Attacks);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
