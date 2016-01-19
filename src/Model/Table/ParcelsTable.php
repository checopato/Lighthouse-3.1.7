<?php
namespace App\Model\Table;

use App\Model\Entity\Parcel;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parcels Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Shippings
 * @property \Cake\ORM\Association\BelongsTo $Ports
 */
class ParcelsTable extends Table
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

        $this->table('parcels');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Shippings', [
            'foreignKey' => 'shipping_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Ports', [
            'foreignKey' => 'port_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('type_of_call');

        $validator
            ->add('volume', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('volume');

        $validator
            ->allowEmpty('unit');

        $validator
            ->allowEmpty('cargo');

        $validator
            ->add('rate_op', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('rate_op');

        $validator
            ->add('rate_av', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('rate_av');

        $validator
            ->allowEmpty('term');

        $validator
            ->add('demurrage_rate', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('demurrage_rate');

        $validator
            ->add('freight_100', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('freight_100');

        $validator
            ->add('whose_agent', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('whose_agent');

        $validator
            ->allowEmpty('agent');

        $validator
            ->add('des_dem_ffi', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('des_dem_ffi');

        $validator
            ->add('des_dem_char', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('des_dem_char');

        $validator
            ->add('dem_bro', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('dem_bro');

        $validator
            ->add('baf_usd', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('baf_usd');

        $validator
            ->add('eta_arr', 'valid', ['rule' => 'date'])
            ->allowEmpty('eta_arr');

        $validator
            ->add('etb_ber', 'valid', ['rule' => 'date'])
            ->allowEmpty('etb_ber');

        $validator
            ->add('etoc_op_comm', 'valid', ['rule' => 'date'])
            ->allowEmpty('etoc_op_comm');

        $validator
            ->add('etoc_op_comp', 'valid', ['rule' => 'date'])
            ->allowEmpty('etoc_op_comp');

        $validator
            ->add('ets_sailed', 'valid', ['rule' => 'date'])
            ->allowEmpty('ets_sailed');

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
        $rules->add($rules->existsIn(['port_id'], 'Ports'));
        return $rules;
    }
}
