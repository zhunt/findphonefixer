<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

use Cake\Event\Event;


use ArrayObject;
use Cake\Database\Expression\QueryExpression;
use Cake\Datasource\ConnectionManager;

use Cake\Event\EventManagerTrait;

use Cake\ORM\Entity;

use Cake\Database\Schema\Table as Schema;


/**
 * Venues Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Provinces
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\BelongsTo $Cities
 * @property \Cake\ORM\Association\BelongsTo $Neighbourhoods
 * @property \Cake\ORM\Association\BelongsTo $EstablishmentTypes
 * @property \Cake\ORM\Association\BelongsTo $InsideVenues
 * @property \Cake\ORM\Association\BelongsToMany $Amenities
 * @property \Cake\ORM\Association\BelongsToMany $Cuisines
 * @property \Cake\ORM\Association\BelongsToMany $Features
 * @property \Cake\ORM\Association\BelongsToMany $VenuePhotos
 *
 * @method \App\Model\Entity\Venue get($primaryKey, $options = [])
 * @method \App\Model\Entity\Venue newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Venue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Venue|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Venue[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Venue findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VenuesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('venues');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Provinces', [
            'foreignKey' => 'province_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Neighbourhoods', [
            'foreignKey' => 'neighbourhood_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EstablishmentTypes', [
            'foreignKey' => 'establishment_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('InsideVenues', [
            'foreignKey' => 'venue_id'
        ]);
        $this->belongsToMany('Amenities', [
            'foreignKey' => 'venue_id',
            'targetForeignKey' => 'amenity_id',
            'joinTable' => 'amenities_venues'
        ]);
        $this->belongsToMany('Cuisines', [
            'foreignKey' => 'venue_id',
            'targetForeignKey' => 'cuisine_id',
            'joinTable' => 'cuisines_venues'
        ]);
        $this->belongsToMany('Features', [
            'foreignKey' => 'venue_id',
            'targetForeignKey' => 'feature_id',
            'joinTable' => 'features_venues'
        ]);
        $this->belongsToMany('VenuePhotos', [
            'foreignKey' => 'venue_id',
            'targetForeignKey' => 'venue_photo_id',
            'joinTable' => 'venue_photos_venues'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

/*
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');

        $validator
            ->requirePresence('seo_title', 'create')
            ->notEmpty('seo_title');

        $validator
            ->requirePresence('seo_desc', 'create')
            ->notEmpty('seo_desc');

        $validator
            ->requirePresence('page_url', 'create')
            ->notEmpty('page_url');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('geo_cords', 'create')
            ->notEmpty('geo_cords');

        $validator
            ->boolean('flag_mall')
            ->requirePresence('flag_mall', 'create')
            ->notEmpty('flag_mall');

        $validator
            ->boolean('flag_closed')
            ->requirePresence('flag_closed', 'create')
            ->notEmpty('flag_closed');

        $validator
            ->requirePresence('phone_1', 'create')
            ->notEmpty('phone_1');

        $validator
            ->requirePresence('phone_2', 'create')
            ->notEmpty('phone_2');

        $validator
            ->requirePresence('website_url', 'create')
            ->notEmpty('website_url');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->requirePresence('hours_sun', 'create')
            ->notEmpty('hours_sun');

        $validator
            ->requirePresence('hours_mon', 'create')
            ->notEmpty('hours_mon');

        $validator
            ->requirePresence('hours_tue', 'create')
            ->notEmpty('hours_tue');

        $validator
            ->requirePresence('hours_wed', 'create')
            ->notEmpty('hours_wed');

        $validator
            ->requirePresence('hours_thu', 'create')
            ->notEmpty('hours_thu');

        $validator
            ->requirePresence('hours_fri', 'create')
            ->notEmpty('hours_fri');

        $validator
            ->requirePresence('hours_sat', 'create')
            ->notEmpty('hours_sat');

        $validator
            ->requirePresence('hours_holidays', 'create')
            ->notEmpty('hours_holidays');

        $validator
            ->numeric('user_rating')
            ->allowEmpty('user_rating');

        $validator
            ->integer('user_votes')
            ->allowEmpty('user_votes');
            */

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['province_id'], 'Provinces'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        $rules->add($rules->existsIn(['neighbourhood_id'], 'Neighbourhoods'));
        $rules->add($rules->existsIn(['establishment_type_id'], 'EstablishmentTypes'));
        //$rules->add($rules->existsIn(['inside_venue_id'], 'Venues'));

        return $rules;
    }


    public function beforeSave($event, $entity, $options) { debug($entity); 
        if (isset($entity['latitude']) && isset($entity['longitude'])) {
            $entity->geo_cords = new QueryExpression("GeomFromText('POINT(" . $entity['longitude'] . ' ' . $entity['latitude'] . ")')"); // "GeomFromText( POINT(-2.2371147 53.4773477 ) )"
        }
        unset($entity['latitude']);
        unset($entity['longitude']);
    }

/*
    public function beforeSave($event, $entity, $options)
    {
        if ($entity->tag_string) {
            $entity->tags = $this->_buildTags($entity->tag_string);
        }
    }
*/

}


