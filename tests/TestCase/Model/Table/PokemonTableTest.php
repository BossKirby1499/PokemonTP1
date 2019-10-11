<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PokemonTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PokemonTable Test Case
 */
class PokemonTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PokemonTable
     */
    public $Pokemon;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pokemon',
        'app.Users',
        'app.Types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pokemon') ? [] : ['className' => PokemonTable::class];
        $this->Pokemon = TableRegistry::getTableLocator()->get('Pokemon', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pokemon);

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
