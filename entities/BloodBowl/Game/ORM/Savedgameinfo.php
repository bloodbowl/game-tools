<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * Savedgameinfo
 *
 * @ORM\Table(name="SavedGameInfo")
 * @ORM\Entity
 */
class Savedgameinfo
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
     * @ORM\Column(name="strName", type="string", length=255, nullable=true)
     */
    private $strname;

    /**
     * @var string
     *
     * @ORM\Column(name="strSaveDate", type="string", length=255, nullable=true)
     */
    private $strsavedate;

    /**
     * @var string
     *
     * @ORM\Column(name="strVersion", type="string", length=255, nullable=true)
     */
    private $strversion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_idTeam_Listing", type="integer", nullable=true)
     */
    private $championshipIdteamListing;

    /**
     * @var string
     *
     * @ORM\Column(name="Championship_strTeamName", type="string", length=255, nullable=false)
     */
    private $championshipStrteamname;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_idTeamLogo", type="integer", nullable=true)
     */
    private $championshipIdteamlogo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_idRule_Types_Current", type="integer", nullable=true)
     */
    private $championshipIdruleTypesCurrent;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_iCurrentDay", type="integer", nullable=true)
     */
    private $championshipIcurrentday;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_iCurrentSeason", type="integer", nullable=true)
     */
    private $championshipIcurrentseason;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_iTeamCash", type="integer", nullable=true)
     */
    private $championshipIteamcash;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_iTeamValue", type="integer", nullable=true)
     */
    private $championshipIteamvalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_iTeamPopularity", type="integer", nullable=true)
     */
    private $championshipIteampopularity;

    /**
     * @var integer
     *
     * @ORM\Column(name="Campaign_idCampaign_Listing", type="integer", nullable=true)
     */
    private $campaignIdcampaignListing;

    /**
     * @var integer
     *
     * @ORM\Column(name="Campaign_bRealTime", type="integer", nullable=true)
     */
    private $campaignBrealtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="Campaign_iTeamPrestige", type="integer", nullable=true)
     */
    private $campaignIteamprestige;

    /**
     * @var integer
     *
     * @ORM\Column(name="Campaign_iCurrentPeriod", type="integer", nullable=true)
     */
    private $campaignIcurrentperiod;

    /**
     * @var string
     *
     * @ORM\Column(name="Match_strSave", type="text", nullable=true)
     */
    private $matchStrsave;

    /**
     * @var integer
     *
     * @ORM\Column(name="Match_idDifficultyLevels", type="integer", nullable=true)
     */
    private $matchIddifficultylevels;

    /**
     * @var integer
     *
     * @ORM\Column(name="Match_iStadium", type="integer", nullable=true)
     */
    private $matchIstadium;

    /**
     * @var integer
     *
     * @ORM\Column(name="Match_bDeathZoneEnabled", type="integer", nullable=true)
     */
    private $matchBdeathzoneenabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="iSlot", type="integer", nullable=true)
     */
    private $islot;

    /**
     * @var string
     *
     * @ORM\Column(name="strTeamLogo", type="string", length=255, nullable=false)
     */
    private $strteamlogo;

    /**
     * @var integer
     *
     * @ORM\Column(name="iLogoRace", type="integer", nullable=true)
     */
    private $ilogorace;

    /**
     * @var integer
     *
     * @ORM\Column(name="iLogoIndex", type="integer", nullable=true)
     */
    private $ilogoindex;

    /**
     * @var string
     *
     * @ORM\Column(name="strAvailableRaces", type="string", length=8, nullable=false)
     */
    private $stravailableraces;

    /**
     * @var integer
     *
     * @ORM\Column(name="iInMatch", type="integer", nullable=true)
     */
    private $iinmatch;

    /**
     * @var integer
     *
     * @ORM\Column(name="iRace", type="integer", nullable=true)
     */
    private $irace;

    /**
     * @var string
     *
     * @ORM\Column(name="Story_strName", type="string", length=255, nullable=true)
     */
    private $storyStrname;

    /**
     * @var string
     *
     * @ORM\Column(name="Story_strContext", type="text", nullable=true)
     */
    private $storyStrcontext;


}
