<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AfiliatsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AfiliatsTable Test Case
 */
class AfiliatsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AfiliatsTable
     */
    protected $Afiliats;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Afiliats',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Afiliats') ? [] : ['className' => AfiliatsTable::class];
        $this->Afiliats = TableRegistry::getTableLocator()->get('Afiliats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Afiliats);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
