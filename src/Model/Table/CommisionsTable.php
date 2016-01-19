<?php
namespace App\Model\Table;

use App\Model\Entity\Commision;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Commisions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Shippings
 */
class CommisionsTable extends Table
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

        $this->table('commisions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Shippings', [
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
            ->add('date_com', 'valid', ['rule' => 'date'])
            ->allowEmpty('date_com');

        $validator
            ->allowEmpty('service');

        $validator
            ->allowEmpty('type_com');

        $validator
            ->add('total', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('total');

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
        $rules->add($rules->existsIn(['shipping_id'], 'Shippings'));
        return $rules;
    }
}
