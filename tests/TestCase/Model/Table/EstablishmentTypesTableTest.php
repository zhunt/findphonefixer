<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstablishmentTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstablishmentTypesTable Test Case
 */
class EstablishmentTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstablishmentTypesTable
     */
    public $EstablishmentTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.establishment_types',
        'app.venues',
        'app.provinces',
        'app.countries',
        'app.cities',
        'app.images',
        'app.neighbourhoods',
        'app.inside_venues',
        'app.amenities',
        'app.amenities_venues',
        'app.cuisines',
        'app.cuisines_venues',
        'app.features',
        'app.features_venues',
        'app.venue_photos',
        'app.venue_photos_venues'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EstablishmentTypes') ? [] : ['className' => 'App\Model\Table\EstablishmentTypesTable'];
        $this->EstablishmentTypes = TableRegistry::get('EstablishmentTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstablishmentTypes);

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
