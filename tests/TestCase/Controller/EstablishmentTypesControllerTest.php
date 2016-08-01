<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EstablishmentTypesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EstablishmentTypesController Test Case
 */
class EstablishmentTypesControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
