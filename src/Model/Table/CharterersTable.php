<?php
namespace App\Model\Table;

use App\Model\Entity\Charterer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Charterers Model
 *
 * @property \Cake\ORM\Association\HasMany $Fixtures
 */
class CharterersTable extends Table
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

        $this->table('charterers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Fixtures', [
            'foreignKey' => 'charterer_id'
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
            ->requirePresence('full_style', 'create')
            ->notEmpty('full_style');

        $validator
            ->requirePresence('nick', 'create')
            ->notEmpty('nick');

        return $validator;
    }
}
