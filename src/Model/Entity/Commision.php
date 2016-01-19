<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Commision Entity.
 *
 * @property int $id
 * @property string $shipping_id
 * @property \App\Model\Entity\Shipping $shipping
 * @property \Cake\I18n\Time $date_com
 * @property string $service
 * @property string $type_com
 * @property float $total
 */
class Commision extends Entity
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
