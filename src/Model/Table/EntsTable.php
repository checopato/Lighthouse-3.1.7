<?php
namespace App\Model\Table;

use App\Model\Entity\Ent;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ents Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Shipowners
 * @property \Cake\ORM\Association\BelongsToMany $Entpics
 */
class EntsTable extends Table
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

        $this->table('ents');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Shipowners', [
            'foreignKey' => 'shipowner_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Entpics', [
            'foreignKey' => 'ent_id',
            'targetForeignKey' => 'entpic_id',
            'joinTable' => 'entpics_ents'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('info');

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
        $rules->add($rules->existsIn(['shipowner_id'], 'Shipowners'));
        return $rules;
    }
}
