<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shipowner Entity.
 *
 * @property int $id
 * @property string $full_style
 * @property string $nick
 * @property \App\Model\Entity\Fixture[] $fixtures
 */
class Shipowner extends Entity
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
