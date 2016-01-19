<?php
namespace App\Model\Table;

use App\Model\Entity\Fixture;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fixtures Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Pics
 * @property \Cake\ORM\Association\BelongsTo $Charterers
 * @property \Cake\ORM\Association\BelongsTo $Shipowners
 * @property \Cake\ORM\Association\HasMany $Shippings
 */
class FixturesTable extends Table
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

        $this->table('fixtures');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Pics', [
            'className' => 'Users',
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Charterers', [
            'foreignKey' => 'charterer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Shipowners', [
            'foreignKey' => 'shipowner_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Shippings', [
            'foreignKey' => 'fixture_id'
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
            ->add('broker_com', 'valid', ['rule' => 'numeric'])
            ->requirePresence('broker_com', 'create')
            ->notEmpty('broker_com');

        $validator
            ->add('cp_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('cp_date');

        $validator
            ->allowEmpty('fix_type');

        $validator
            ->add('period_st', 'valid', ['rule' => 'date'])
            ->allowEmpty('period_st');

        $validator
            ->add('period_nd', 'valid', ['rule' => 'date'])
            ->allowEmpty('period_nd');

        $validator
            ->allowEmpty('start_counting');

        $validator
            ->add('cargo_nom_day', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('cargo_nom_day');

        $validator
            ->add('int_per_dat', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('int_per_dat');

        $validator
            ->add('final_performer', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('final_performer');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        //$rules->add($rules->existsIn(['pic_id'], 'Pics'));
        $rules->add($rules->existsIn(['charterer_id'], 'Charterers'));
        $rules->add($rules->existsIn(['shipowner_id'], 'Shipowners'));
        return $rules;
    }
}
