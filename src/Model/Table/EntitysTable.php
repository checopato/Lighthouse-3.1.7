<?php
namespace App\Model\Table;

use App\Model\Entity\Entity;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Entitys Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Entitypics
 */
class EntitysTable extends Table
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

        $this->table('entitys');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsToMany('Entitypics', [
            'foreignKey' => 'entity_id',
            'targetForeignKey' => 'entitypic_id',
            'joinTable' => 'entitypics_entitys'
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
            ->add('shipowner', 'valid', ['rule' => 'numeric'])
            ->requirePresence('shipowner', 'create')
            ->notEmpty('shipowner');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('info');

        return $validator;
    }
}
