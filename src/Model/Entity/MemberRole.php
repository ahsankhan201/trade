<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MemberRole Entity.
 */
class MemberRole extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     * Note that '*' is set to true, which allows all unspecified fields to be
     * mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'member_roleId' => false,
    ];
}
