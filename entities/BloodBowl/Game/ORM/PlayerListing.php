<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerListing
 *
 * @ORM\Table(name="Player_Listing")
 * @ORM\Entity
 */
class PlayerListing
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
     * @ORM\Column(name="idPlayer_Names", type="integer", nullable=true)
     */
    private $idplayerNames;

    /**
     * @var string
     *
     * @ORM\Column(name="strName", type="string", length=255, nullable=true)
     */
    private $strname;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPlayer_Types", type="integer", nullable=true)
     */
    private $idplayerTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTeam_Listing", type="integer", nullable=true)
     */
    private $idteamListing;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTeam_Listing_Previous", type="integer", nullable=true)
     */
    private $idteamListingPrevious;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRaces", type="integer", nullable=true)
     */
    private $idraces;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPlayerColor", type="integer", nullable=true)
     */
    private $iplayercolor;

    /**
     * @var integer
     *
     * @ORM\Column(name="iSkinScalePercent", type="integer", nullable=false)
     */
    private $iskinscalepercent;

    /**
     * @var integer
     *
     * @ORM\Column(name="iSkinMeshVariant", type="integer", nullable=false)
     */
    private $iskinmeshvariant;

    /**
     * @var integer
     *
     * @ORM\Column(name="iSkinTextureVariant", type="integer", nullable=false)
     */
    private $iskintexturevariant;

    /**
     * @var float
     *
     * @ORM\Column(name="fAgeing", type="float", precision=10, scale=0, nullable=true)
     */
    private $fageing;

    /**
     * @var integer
     *
     * @ORM\Column(name="iNumber", type="integer", nullable=true)
     */
    private $inumber;

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
     * @ORM\Column(name="idPlayer_Levels", type="integer", nullable=true)
     */
    private $idplayerLevels;

    /**
     * @var integer
     *
     * @ORM\Column(name="iExperience", type="integer", nullable=true)
     */
    private $iexperience;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEquipment_Listing_Helmet", type="integer", nullable=true)
     */
    private $idequipmentListingHelmet;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEquipment_Listing_Pauldron", type="integer", nullable=true)
     */
    private $idequipmentListingPauldron;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEquipment_Listing_Gauntlet", type="integer", nullable=true)
     */
    private $idequipmentListingGauntlet;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEquipment_Listing_Boot", type="integer", nullable=true)
     */
    private $idequipmentListingBoot;

    /**
     * @var integer
     *
     * @ORM\Column(name="Durability_iHelmet", type="integer", nullable=true)
     */
    private $durabilityIhelmet;

    /**
     * @var integer
     *
     * @ORM\Column(name="Durability_iPauldron", type="integer", nullable=true)
     */
    private $durabilityIpauldron;

    /**
     * @var integer
     *
     * @ORM\Column(name="Durability_iGauntlet", type="integer", nullable=true)
     */
    private $durabilityIgauntlet;

    /**
     * @var integer
     *
     * @ORM\Column(name="Durability_iBoot", type="integer", nullable=true)
     */
    private $durabilityIboot;

    /**
     * @var integer
     *
     * @ORM\Column(name="iSalary", type="integer", nullable=true)
     */
    private $isalary;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contract_iDuration", type="integer", nullable=true)
     */
    private $contractIduration;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contract_iSeasonRemaining", type="integer", nullable=true)
     */
    private $contractIseasonremaining;

    /**
     * @var integer
     *
     * @ORM\Column(name="idNegotiation_Condition_Types", type="integer", nullable=true)
     */
    private $idnegotiationConditionTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Negotiation_iRemainingTries", type="integer", nullable=true)
     */
    private $negotiationIremainingtries;

    /**
     * @var integer
     *
     * @ORM\Column(name="Negotiation_iConditionDemand", type="integer", nullable=true)
     */
    private $negotiationIconditiondemand;

    /**
     * @var integer
     *
     * @ORM\Column(name="iValue", type="integer", nullable=true)
     */
    private $ivalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="iMatchSuspended", type="integer", nullable=true)
     */
    private $imatchsuspended;

    /**
     * @var integer
     *
     * @ORM\Column(name="iNbLevelsUp", type="integer", nullable=true)
     */
    private $inblevelsup;

    /**
     * @var integer
     *
     * @ORM\Column(name="LevelUp_iRollResult", type="integer", nullable=true)
     */
    private $levelupIrollresult;

    /**
     * @var integer
     *
     * @ORM\Column(name="LevelUp_iRollResult2", type="integer", nullable=true)
     */
    private $levelupIrollresult2;

    /**
     * @var integer
     *
     * @ORM\Column(name="LevelUp_bDouble", type="integer", nullable=true)
     */
    private $levelupBdouble;

    /**
     * @var integer
     *
     * @ORM\Column(name="bGenerated", type="integer", nullable=true)
     */
    private $bgenerated;

    /**
     * @var integer
     *
     * @ORM\Column(name="bStar", type="integer", nullable=true)
     */
    private $bstar;

    /**
     * @var integer
     *
     * @ORM\Column(name="bEdited", type="integer", nullable=true)
     */
    private $bedited;

    /**
     * @var integer
     *
     * @ORM\Column(name="bDead", type="integer", nullable=true)
     */
    private $bdead;

    /**
     * @var string
     *
     * @ORM\Column(name="strLevelUp", type="string", length=255, nullable=true)
     */
    private $strlevelup;


}
