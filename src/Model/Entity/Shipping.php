<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shipping Entity.
 *
 * @property int $id
 * @property string $serie
 * @property int $fixture_id
 * @property \App\Model\Entity\Fixture $fixture
 * @property string $vessel
 * @property \Cake\I18n\Time $laycan_com
 * @property \Cake\I18n\Time $laycan_end
 * @property float $freight_rate
 * @property string $status
 * @property bool $is_fact
 * @property \App\Model\Entity\Commision[] $commisions
 * @property \App\Model\Entity\Parcel[] $parcels
 */
class Shipping extends Entity
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
