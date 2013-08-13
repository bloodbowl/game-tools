<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * RuleListing
 *
 * @ORM\Table(name="Rule_Listing")
 * @ORM\Entity
 */
class RuleListing
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
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStringsLocalized", type="integer", nullable=true)
     */
    private $idstringslocalized;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStringsLocalizedInfo", type="integer", nullable=true)
     */
    private $idstringslocalizedinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="strName", type="string", length=255, nullable=false)
     */
    private $strname;

    /**
     * @var integer
     *
     * @ORM\Column(name="bRealTime", type="integer", nullable=true)
     */
    private $brealtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="iNbTeams", type="integer", nullable=true)
     */
    private $inbteams;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRule_Types", type="integer", nullable=true)
     */
    private $idruleTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_iNbGroups", type="integer", nullable=true)
     */
    private $championshipInbgroups;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_iNbMatchsPerGroup", type="integer", nullable=true)
     */
    private $championshipInbmatchspergroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cup_iNbGroups", type="integer", nullable=true)
     */
    private $cupInbgroups;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cup_iNbMatchsPerGroup", type="integer", nullable=true)
     */
    private $cupInbmatchspergroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="Playoff_iStartingLevel", type="integer", nullable=true)
     */
    private $playoffIstartinglevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="Playoff_iDoubleElimination", type="integer", nullable=true)
     */
    private $playoffIdoubleelimination;

    /**
     * @var integer
     *
     * @ORM\Column(name="bChallenge", type="integer", nullable=true)
     */
    private $bchallenge;

    /**
     * @var integer
     *
     * @ORM\Column(name="Reward_iWinner", type="integer", nullable=true)
     */
    private $rewardIwinner;

    /**
     * @var integer
     *
     * @ORM\Column(name="Reward_iLoser", type="integer", nullable=true)
     */
    private $rewardIloser;

    /**
     * @var integer
     *
     * @ORM\Column(name="bSponsor", type="integer", nullable=true)
     */
    private $bsponsor;

    /**
     * @var integer
     *
     * @ORM\Column(name="bBuyExperiencedPlayers", type="integer", nullable=true)
     */
    private $bbuyexperiencedplayers;

    /**
     * @var integer
     *
     * @ORM\Column(name="bDeath", type="integer", nullable=true)
     */
    private $bdeath;

    /**
     * @var integer
     *
     * @ORM\Column(name="bAgeing", type="integer", nullable=true)
     */
    private $bageing;

    /**
     * @var integer
     *
     * @ORM\Column(name="bNegociation", type="integer", nullable=true)
     */
    private $bnegociation;

    /**
     * @var integer
     *
     * @ORM\Column(name="bMagic", type="integer", nullable=true)
     */
    private $bmagic;

    /**
     * @var integer
     *
     * @ORM\Column(name="bBribery", type="integer", nullable=true)
     */
    private $bbribery;

    /**
     * @var integer
     *
     * @ORM\Column(name="bDoping", type="integer", nullable=true)
     */
    private $bdoping;

    /**
     * @var integer
     *
     * @ORM\Column(name="Coups_bCoupDeMain", type="integer", nullable=true)
     */
    private $coupsBcoupdemain;

    /**
     * @var integer
     *
     * @ORM\Column(name="Coups_bCoupFiesta", type="integer", nullable=true)
     */
    private $coupsBcoupfiesta;

    /**
     * @var integer
     *
     * @ORM\Column(name="bPreMatchEvent", type="integer", nullable=true)
     */
    private $bprematchevent;

    /**
     * @var integer
     *
     * @ORM\Column(name="Max_iCheerleaders", type="integer", nullable=true)
     */
    private $maxIcheerleaders;

    /**
     * @var integer
     *
     * @ORM\Column(name="Max_iBalms", type="integer", nullable=true)
     */
    private $maxIbalms;

    /**
     * @var integer
     *
     * @ORM\Column(name="Max_iRerolls", type="integer", nullable=true)
     */
    private $maxIrerolls;

    /**
     * @var integer
     *
     * @ORM\Column(name="Max_iPopularity", type="integer", nullable=true)
     */
    private $maxIpopularity;

    /**
     * @var integer
     *
     * @ORM\Column(name="Max_iExperienceLevel", type="integer", nullable=true)
     */
    private $maxIexperiencelevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="bStarPlayers", type="integer", nullable=true)
     */
    private $bstarplayers;

    /**
     * @var integer
     *
     * @ORM\Column(name="bEquipment", type="integer", nullable=true)
     */
    private $bequipment;

    /**
     * @var integer
     *
     * @ORM\Column(name="bCustomEquipment", type="integer", nullable=true)
     */
    private $bcustomequipment;

    /**
     * @var integer
     *
     * @ORM\Column(name="iMatchDuration", type="integer", nullable=true)
     */
    private $imatchduration;

    /**
     * @var integer
     *
     * @ORM\Column(name="MatchDuration_iRT", type="integer", nullable=true)
     */
    private $matchdurationIrt;

    /**
     * @var integer
     *
     * @ORM\Column(name="MatchDuration_iTT", type="integer", nullable=true)
     */
    private $matchdurationItt;

    /**
     * @var string
     *
     * @ORM\Column(name="idTrophy_Names", type="string", length=255, nullable=true)
     */
    private $idtrophyNames;

    /**
     * @var string
     *
     * @ORM\Column(name="Trophy_strName", type="string", length=255, nullable=false)
     */
    private $trophyStrname;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTrophy_Visuals", type="integer", nullable=true)
     */
    private $idtrophyVisuals;

    /**
     * @var integer
     *
     * @ORM\Column(name="bExtendedInducements", type="integer", nullable=true)
     */
    private $bextendedinducements;

    /**
     * @var integer
     *
     * @ORM\Column(name="bContracts", type="integer", nullable=true)
     */
    private $bcontracts;

    /**
     * @var integer
     *
     * @ORM\Column(name="bTraining", type="integer", nullable=true)
     */
    private $btraining;

    /**
     * @var integer
     *
     * @ORM\Column(name="bRacialScrolls", type="integer", nullable=true)
     */
    private $bracialscrolls;


}
