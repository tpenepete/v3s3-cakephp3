<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * V3s3 Entity
 *
 * @property int $id
 * @property int $timestamp
 * @property string $date_time
 * @property string $ip
 * @property string $hash_name
 * @property string|resource $name
 * @property string|resource $data
 * @property string $mime_type
 * @property int $status
 * @property int $timestamp_deleted
 * @property string $date_time_deleted
 * @property string $ip_deleted_from
 */
class V3s3 extends Entity
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
        'id' => false
    ];
}
