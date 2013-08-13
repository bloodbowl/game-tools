<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerTypes
 *
 * @ORM\Table(name="Player_Types")
 * @ORM\Entity
 */
class PlayerTypes
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
     * @var string
     *
     * @ORM\Column(name="DATA_CONSTANT", type="string", length=255, nullable=true)
     */
    private $dataConstant;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRaces", type="integer", nullable=true)
     */
    private $idraces;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPlayer_BaseTypes", type="integer", nullable=true)
     */
    private $idplayerBasetypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPlayer_Name_Types", type="integer", nullable=true)
     */
    private $idplayerNameTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized", type="integer", nullable=true)
     */
    private $idstringsLocalized;

    /**
     * @var string
     *
     * @ORM\Column(name="strName", type="string", length=255, nullable=true)
     */
    private $strname;

    /**
     * @var float
     *
     * @ORM\Column(name="Characteristics_fMovementAllowance", type="float", precision=10, scale=0, nullable=true)
     */
    private $characteristicsFmovementallowance;

    /**
     * @var float
     *
     * @ORM\Column(name="Characteristics_fStrength", type="float", precision=10, scale=0, nullable=true)
     */
    private $characteristicsFstrength;

    /**
     * @var float
     *
     * @ORM\Column(name="Characteristics_fAgility", type="float", precision=10, scale=0, nullable=true)
     */
    private $characteristicsFagility;

    /**
     * @var float
     *
     * @ORM\Column(name="Characteristics_fArmourValue", type="float", precision=10, scale=0, nullable=true)
     */
    private $characteristicsFarmourvalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPrice", type="integer", nullable=true)
     */
    private $iprice;

    /**
     * @var integer
     *
     * @ORM\Column(name="iMaxQuantity", type="integer", nullable=true)
     */
    private $imaxquantity;


}
