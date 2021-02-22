<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $name
 * @property string|null $type
 * @property string|null $customer_type
 * @property string|null $processing_time
 * @property string|null $eservice
 * @property string|null $access_url
 * @property string|null $technology
 * @property int|null $no_of_user
 * @property string|null $major_features
 * @property string|null $access_point
 * @property string|null $payment
 * @property string|null $focal_person_name
 * @property string|null $focal_person_designation
 * @property string|null $focal_person_phone
 * @property string|null $focal_person_email
 * @property int|null $updated_by
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\User $user
 */
class Service extends Entity
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
        'type' => true,
        'customer_type' => true,
        'processing_time' => true,
        'eservice' => true,
        'access_url' => true,
        'technology' => true,
        'no_of_user' => true,
        'major_features' => true,
        'access_point' => true,
        'payment' => true,
        'focal_person_name' => true,
        'focal_person_designation' => true,
        'focal_person_phone' => true,
        'focal_person_email' => true,
        'updated_by' => true,
        'created_at' => true,
        'updated_at' => true,
        'user' => true
    ];
}
