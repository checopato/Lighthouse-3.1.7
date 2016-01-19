<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fixture Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $pic_id
 * @property \App\Model\Entity\Pic $pic
 * @property int $charterer_id
 * @property \App\Model\Entity\Charterer $charterer
 * @property int $shipowner_id
 * @property \App\Model\Entity\Shipowner $shipowner
 * @property float $broker_com
 * @property \Cake\I18n\Time $cp_date
 * @property string $fix_type
 * @property \Cake\I18n\Time $period_st
 * @property \Cake\I18n\Time $period_nd
 * @property string $start_counting
 * @property int $cargo_nom_day
 * @property int $int_per_dat
 * @property int $final_performer
 * @property \App\Model\Entity\Shipping[] $shippings
 */
class Fixture extends Entity
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
