<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ent Entity.
 *
 * @property int $id
 * @property int $shipowner_id
 * @property \App\Model\Entity\Shipowner $shipowner
 * @property string $name
 * @property string $info
 * @property \App\Model\Entity\Entpic[] $entpics
 */
class Ent extends Entity
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
