<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parcel Entity.
 *
 * @property int $id
 * @property int $shipping_id
 * @property \App\Model\Entity\Shipping $shipping
 * @property int $port_id
 * @property \App\Model\Entity\Port $port
 * @property string $type_of_call
 * @property float $volume
 * @property string $unit
 * @property string $cargo
 * @property float $rate_op
 * @property float $rate_av
 * @property string $term
 * @property float $demurrage_rate
 * @property float $freight_100
 * @property bool $whose_agent
 * @property string $agent
 * @property float $des_dem_ffi
 * @property float $des_dem_char
 * @property float $dem_bro
 * @property float $baf_usd
 * @property \Cake\I18n\Time $eta_arr
 * @property \Cake\I18n\Time $etb_ber
 * @property \Cake\I18n\Time $etoc_op_comm
 * @property \Cake\I18n\Time $etoc_op_comp
 * @property \Cake\I18n\Time $ets_sailed
 */
class Parcel extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
