<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Venues Controller
 *
 * @property \App\Model\Table\VenuesTable $Venues
 */
class VenuesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
           // 'contain' => ['Provinces', 'Countries', 'Cities', 'Neighbourhoods', 'EstablishmentTypes']
        ];
        $venues = $this->paginate($this->Venues);

        $this->set(compact('venues'));
        $this->set('_serialize', ['venues']);
    }

    /**
     * View method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venue = $this->Venues->find('all');
            //'contain' => ['Provinces', 'Countries', 'Cities', 'Neighbourhoods', 'EstablishmentTypes', 
            //                'Amenities', 'Cuisines', 'Features', 'VenuePhotos'],
            //                'where' => ['Venue.id' => $id ], 
           // 'select' => ['cords' =>  $venue->func()->ST_AsText('Venue.geo_cords') ]       
      //  ]);

        $concat = $venue->func()->ST_AsText('Venue.geo_cords');

        $venue->select(['new_cords' => $concat]);


        $query = $this->Venues->find();
$lev = $query->func()->levenshtein([$search, 'LOWER(title)' => 'literal']);
$query->where(function ($exp) use ($lev) {
    return $exp->between($lev, 0, $tolerance);
});

// Generated SQL would be
WHERE levenshtein(:c0, lower(street)) BETWEEN :c1 AND :c2




       // $venue->select(['cords' =>  $venue->func()->ST_AsText('Venue.geo_cords') ]);

        //->select(['slug' => $query->func()->concat(['title', '-', 'id'])])
/*
$query = $articles->find()->innerJoinWith('Categories');
$concat = $query->func()->concat([
    'Articles.title' => 'identifier',
    ' - CAT: ',
    'Categories.name' => 'identifier',
    ' - Age: ',
    '(DATEDIFF(NOW(), Articles.created))' => 'literal',
]);
$query->select(['link_title' => $concat]);

*/


        $this->set('venue', $venue);
        $this->set('_serialize', ['venue']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venue = $this->Venues->newEntity();
        if ($this->request->is('post')) {
            $venue = $this->Venues->patchEntity($venue, $this->request->data);
            if ($this->Venues->save($venue)) {
                $this->Flash->success(__('The venue has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venue could not be saved. Please, try again.'));
            }
        }
        $provinces = $this->Venues->Provinces->find('list', ['limit' => 200]);
        $countries = $this->Venues->Countries->find('list', ['limit' => 200]);
        $cities = $this->Venues->Cities->find('list', ['limit' => 200]);
        $neighbourhoods = $this->Venues->Neighbourhoods->find('list', ['limit' => 200]);
        $establishmentTypes = $this->Venues->EstablishmentTypes->find('list', ['limit' => 200]);
        $insideVenues = $this->Venues->find('list', ['limit' => 200, 'conditions' => [ 'flag_mall' => true ] ] );
        $amenities = $this->Venues->Amenities->find('list', ['limit' => 200]);
        $cuisines = $this->Venues->Cuisines->find('list', ['limit' => 200]);
        $features = $this->Venues->Features->find('list', ['limit' => 200]);
        $venuePhotos = $this->Venues->VenuePhotos->find('list', ['limit' => 200]);
        $this->set(compact('venue', 'provinces', 'countries', 'cities', 'neighbourhoods', 'establishmentTypes', 'insideVenues', 'amenities', 'cuisines', 'features', 'venuePhotos'));
        $this->set('_serialize', ['venue']);
    }

    /*
    * Add just basics of venue 
    * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
    */
    public function quickAdd()
    {
        $this->loadComponent('Geocode');

        $venue = $this->Venues->newEntity();
        if ($this->request->is('post')) {

            // first lets get the address data
            // https://maps.googleapis.com/maps/api/geocode/json?address=

            //debug( $this->request->data['address'] ); // exit;

            $geoData = $this->Geocode->geocodeAdress( $this->request->data['address'] );

            $this->request->data['address'] = $geoData['address'];
           // $this->request->data['geo_cords'] = $geoData['lnglat'];


           // $this->request->data['geo_cords'] = (object) $db->expression("GeomFromText('POINT(" . $geoData['lnglat'] . ")')");

            $this->request->data['latitude'] = $geoData['latitude']; // 53.4773477;
            $this->request->data['longitude'] = $geoData['longitude']; //-2.2371147;




            //debug($this->request->data);


            $venue = $this->Venues->patchEntity($venue, $this->request->data);

           debug($venue); 
            if ($this->Venues->save($venue)) {
                $this->Flash->success(__('The venue has been saved.'));

                exit;
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venue could not be saved. Please, try again.'));
            }
        }

         $this->set(compact('venue'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venue = $this->Venues->get($id, [
            'contain' => ['Amenities', 'Cuisines', 'Features', 'VenuePhotos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venue = $this->Venues->patchEntity($venue, $this->request->data);
            if ($this->Venues->save($venue)) {
                $this->Flash->success(__('The venue has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venue could not be saved. Please, try again.'));
            }
        }
        $provinces = $this->Venues->Provinces->find('list', ['limit' => 200]);
        $countries = $this->Venues->Countries->find('list', ['limit' => 200]);
        $cities = $this->Venues->Cities->find('list', ['limit' => 200]);
        $neighbourhoods = $this->Venues->Neighbourhoods->find('list', ['limit' => 200]);
        $establishmentTypes = $this->Venues->EstablishmentTypes->find('list', ['limit' => 200]);
        $insideVenues = $this->Venues->find('list', ['limit' => 200, 'conditions' => [ 'flag_mall' => true ] ] );
        $amenities = $this->Venues->Amenities->find('list', ['limit' => 200]);
        $cuisines = $this->Venues->Cuisines->find('list', ['limit' => 200]);
        $features = $this->Venues->Features->find('list', ['limit' => 200]);
        $venuePhotos = $this->Venues->VenuePhotos->find('list', ['limit' => 200]);
        $this->set(compact('venue', 'provinces', 'countries', 'cities', 'neighbourhoods', 'establishmentTypes', 'insideVenues', 'amenities', 'cuisines', 'features', 'venuePhotos'));
        $this->set('_serialize', ['venue']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venue = $this->Venues->get($id);
        if ($this->Venues->delete($venue)) {
            $this->Flash->success(__('The venue has been deleted.'));
        } else {
            $this->Flash->error(__('The venue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
