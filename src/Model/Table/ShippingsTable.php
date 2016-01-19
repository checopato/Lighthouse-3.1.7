<?php
namespace App\Model\Table;

use App\Model\Entity\Shipping;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shippings Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Fixtures
 * @property \Cake\ORM\Association\HasMany $Commisions
 * @property \Cake\ORM\Association\HasMany $Parcels
 */
class ShippingsTable extends Table
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

        $this->table('shippings');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Fixtures', [
            'foreignKey' => 'fixture_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Commisions', [
            'foreignKey' => 'shipping_id'
        ]);
        $this->hasMany('Parcels', [
            'foreignKey' => 'shipping_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('serie', 'create')
            ->notEmpty('serie');

        $validator
            ->allowEmpty('vessel');

        $validator
            ->add('laycan_com', 'valid', ['rule' => 'date'])
            ->allowEmpty('laycan_com');

        $validator
            ->add('laycan_end', 'valid', ['rule' => 'date'])
            ->allowEmpty('laycan_end');

        $validator
            ->add('freight_rate', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('freight_rate');

        $validator
            ->allowEmpty('status');

        $validator
            ->add('is_fact', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('is_fact');

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
        $rules->add($rules->existsIn(['fixture_id'], 'Fixtures'));
        return $rules;
    }
}
