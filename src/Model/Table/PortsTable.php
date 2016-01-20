<?php
namespace App\Model\Table;

use App\Model\Entity\Port;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ports Model
 *
 * @property \Cake\ORM\Association\HasMany $Parcels
 * @property \Cake\ORM\Association\HasMany $Terminals
 */
class PortsTable extends Table
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

        $this->table('ports');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Parcels', [
            'foreignKey' => 'port_id'
        ]);
        $this->hasMany('Terminals', [
            'foreignKey' => 'port_id'
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
            ->requirePresence('country', 'create')
            ->notEmpty('country');

        return $validator;
    }
}
