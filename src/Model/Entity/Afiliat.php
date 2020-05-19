<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Afiliat Entity
 *
 * @property int $id
 * @property int|null $num
 * @property string|null $sexe
 * @property \Cake\I18n\FrozenDate|null $data_naixement
 * @property string|null $codi_postal
 * @property string|null $poblacio
 * @property string|null $comarca
 * @property string|null $provincia
 * @property string|null $pais
 * @property \Cake\I18n\FrozenDate|null $data_afiliacio
 * @property string|null $centre_treball
 * @property string|null $federacio
 * @property string|null $sectorial
 * @property string|null $activitat
 * @property string|null $email
 * @property string|null $situacio_personal
 * @property string|null $relacio
 * @property string|null $grup
 * @property string|null $situacio
 * @property string|null $delegat
 * @property string|null $empresa
 * @property string|null $email_professional
 * @property string|null $territorial
 * @property string|null $ocupacio
 * @property string|null $tipus_treballador
 * @property string|null $cos_docent
 * @property string|null $seccio_sindical
 */
class Afiliat extends Entity
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
        'num' => true,
        'sexe' => true,
        'data_naixement' => true,
        'codi_postal' => true,
        'poblacio' => true,
        'comarca' => true,
        'provincia' => true,
        'pais' => true,
        'data_afiliacio' => true,
        'centre_treball' => true,
        'federacio' => true,
        'sectorial' => true,
        'activitat' => true,
        'email' => true,
        'situacio_personal' => true,
        'relacio' => true,
        'grup' => true,
        'situacio' => true,
        'delegat' => true,
        'empresa' => true,
        'email_professional' => true,
        'territorial' => true,
        'ocupacio' => true,
        'tipus_treballador' => true,
        'cos_docent' => true,
        'seccio_sindical' => true,
    ];
}
