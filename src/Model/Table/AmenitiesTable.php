<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Amenities Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Venues
 *
 * @method \App\Model\Entity\Amenity get($primaryKey, $options = [])
 * @method \App\Model\Entity\Amenity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Amenity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Amenity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Amenity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Amenity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Amenity findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AmenitiesTable extends Table
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

        $this->table('amenities');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Venues', [
            'foreignKey' => 'amenity_id',
            'targetForeignKey' => 'venue_id',
            'joinTable' => 'amenities_venues'
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

        $validator
            ->allowEmpty('title')
            ->add('title', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->boolean('flag_all')
            ->requirePresence('flag_all', 'create')
            ->notEmpty('flag_all');

        $validator
            ->boolean('flag_bar')
            ->requirePresence('flag_bar', 'create')
            ->notEmpty('flag_bar');

        $validator
            ->boolean('flag_restaurant')
            ->requirePresence('flag_restaurant', 'create')
            ->notEmpty('flag_restaurant');

        $validator
            ->boolean('flag_hotel')
            ->requirePresence('flag_hotel', 'create')
            ->notEmpty('flag_hotel');

        $validator
            ->boolean('flag_store')
            ->requirePresence('flag_store', 'create')
            ->notEmpty('flag_store');

        $validator
            ->boolean('flag_mall')
            ->requirePresence('flag_mall', 'create')
            ->notEmpty('flag_mall');

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
        $rules->add($rules->isUnique(['title']));

        return $rules;
    }
}
