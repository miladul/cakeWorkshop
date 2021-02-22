<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Organization Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $name
 * @property string|null $organization_type
 * @property string|null $focal_person_name
 * @property string|null $focal_person_designation
 * @property string|null $focal_person_phone
 * @property int|null $no_of_brances
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\User $user
 */
class Organization extends Entity
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
        'user_id' => true,
        'name' => true,
        'organization_type' => true,
        'focal_person_name' => true,
        'focal_person_designation' => true,
        'focal_person_phone' => true,
        'no_of_brances' => true,
        'status' => true,
        'created_at' => true,
        'updated_at' => true,
        'user' => true
    ];
}
