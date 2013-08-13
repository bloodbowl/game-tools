<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipmentListing
 *
 * @ORM\Table(name="Equipment_Listing")
 * @ORM\Entity
 */
class EquipmentListing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized", type="integer", nullable=true)
     */
    private $idstringsLocalized;

    /**
     * @var string
     *
     * @ORM\Column(name="strName", type="string", length=255, nullable=false)
     */
    private $strname;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRaces", type="integer", nullable=true)
     */
    private $idraces;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPlayer_Types", type="integer", nullable=true)
     */
    private $idplayerTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEquipment_Types", type="integer", nullable=true)
     */
    private $idequipmentTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEquipment_Visuals", type="integer", nullable=true)
     */
    private $idequipmentVisuals;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPrice", type="integer", nullable=true)
     */
    private $iprice;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPlayer_Levels", type="integer", nullable=true)
     */
    private $idplayerLevels;

    /**
     * @var integer
     *
     * @ORM\Column(name="iDurability", type="integer", nullable=true)
     */
    private $idurability;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCharacteristics_Bonus", type="integer", nullable=true)
     */
    private $idcharacteristicsBonus;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCharacteristics_Malus", type="integer", nullable=true)
     */
    private $idcharacteristicsMalus;

    /**
     * @var integer
     *
     * @ORM\Column(name="iQuantifier_Bonus", type="integer", nullable=true)
     */
    private $iquantifierBonus;

    /**
     * @var integer
     *
     * @ORM\Column(name="iQuantifier_Malus", type="integer", nullable=true)
     */
    private $iquantifierMalus;

    /**
     * @var integer
     *
     * @ORM\Column(name="bUseable", type="integer", nullable=true)
     */
    private $buseable;

    /**
     * @var float
     *
     * @ORM\Column(name="fBuffProba", type="float", precision=10, scale=0, nullable=true)
     */
    private $fbuffproba;

    /**
     * @var integer
     *
     * @ORM\Column(name="bCustom", type="integer", nullable=true)
     */
    private $bcustom;


}
