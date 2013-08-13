<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendar
 *
 * @ORM\Table(name="Calendar")
 * @ORM\Entity
 */
class Calendar
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
     * @ORM\Column(name="idTeam_Listing_Away", type="integer", nullable=true)
     */
    private $idteamListingAway;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTeam_Listing_Home", type="integer", nullable=true)
     */
    private $idteamListingHome;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_iSeason", type="integer", nullable=true)
     */
    private $championshipIseason;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_iDay", type="integer", nullable=true)
     */
    private $championshipIday;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_iGroup", type="integer", nullable=true)
     */
    private $championshipIgroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_idRule_Types", type="integer", nullable=true)
     */
    private $championshipIdruleTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Championship_iEliminitationLevel", type="integer", nullable=true)
     */
    private $championshipIeliminitationlevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="Playoff_iEliminationLevel", type="integer", nullable=true)
     */
    private $playoffIeliminationlevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="Playoff_bAwayGame", type="integer", nullable=true)
     */
    private $playoffBawaygame;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_iScore", type="integer", nullable=true)
     */
    private $awayIscore;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_iReward", type="integer", nullable=true)
     */
    private $awayIreward;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_iCashEarned", type="integer", nullable=true)
     */
    private $awayIcashearned;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_iPossessionBall", type="integer", nullable=true)
     */
    private $awayIpossessionball;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Occupation_iOwn", type="integer", nullable=true)
     */
    private $awayOccupationIown;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Occupation_iTheir", type="integer", nullable=true)
     */
    private $awayOccupationItheir;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_iMVP", type="integer", nullable=true)
     */
    private $awayImvp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Inflicted_iPasses", type="integer", nullable=true)
     */
    private $awayInflictedIpasses;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Inflicted_iCatches", type="integer", nullable=true)
     */
    private $awayInflictedIcatches;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Inflicted_iInterceptions", type="integer", nullable=true)
     */
    private $awayInflictedIinterceptions;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Inflicted_iTouchdowns", type="integer", nullable=true)
     */
    private $awayInflictedItouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Inflicted_iCasualties", type="integer", nullable=true)
     */
    private $awayInflictedIcasualties;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Inflicted_iTackles", type="integer", nullable=true)
     */
    private $awayInflictedItackles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Inflicted_iKO", type="integer", nullable=true)
     */
    private $awayInflictedIko;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Inflicted_iInjuries", type="integer", nullable=true)
     */
    private $awayInflictedIinjuries;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Inflicted_iDead", type="integer", nullable=true)
     */
    private $awayInflictedIdead;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Inflicted_iMetersRunning", type="integer", nullable=true)
     */
    private $awayInflictedImetersrunning;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Inflicted_iMetersPassing", type="integer", nullable=true)
     */
    private $awayInflictedImeterspassing;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Sustained_iPasses", type="integer", nullable=true)
     */
    private $awaySustainedIpasses;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Sustained_iCatches", type="integer", nullable=true)
     */
    private $awaySustainedIcatches;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Sustained_iInterceptions", type="integer", nullable=true)
     */
    private $awaySustainedIinterceptions;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Sustained_iTouchdowns", type="integer", nullable=true)
     */
    private $awaySustainedItouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Sustained_iCasualties", type="integer", nullable=true)
     */
    private $awaySustainedIcasualties;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Sustained_iTackles", type="integer", nullable=true)
     */
    private $awaySustainedItackles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Sustained_iKO", type="integer", nullable=true)
     */
    private $awaySustainedIko;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Sustained_iInjuries", type="integer", nullable=true)
     */
    private $awaySustainedIinjuries;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Sustained_iDead", type="integer", nullable=true)
     */
    private $awaySustainedIdead;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Sustained_iMetersRunning", type="integer", nullable=true)
     */
    private $awaySustainedImetersrunning;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_Sustained_iMetersPassing", type="integer", nullable=true)
     */
    private $awaySustainedImeterspassing;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_iMetersRunning", type="integer", nullable=true)
     */
    private $awayImetersrunning;

    /**
     * @var integer
     *
     * @ORM\Column(name="Away_iMetersPassing", type="integer", nullable=true)
     */
    private $awayImeterspassing;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_iScore", type="integer", nullable=true)
     */
    private $homeIscore;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_iReward", type="integer", nullable=true)
     */
    private $homeIreward;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_iCashEarned", type="integer", nullable=true)
     */
    private $homeIcashearned;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_iPossessionBall", type="integer", nullable=true)
     */
    private $homeIpossessionball;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Occupation_iOwn", type="integer", nullable=true)
     */
    private $homeOccupationIown;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Occupation_iTheir", type="integer", nullable=true)
     */
    private $homeOccupationItheir;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_iMVP", type="integer", nullable=true)
     */
    private $homeImvp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Inflicted_iPasses", type="integer", nullable=true)
     */
    private $homeInflictedIpasses;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Inflicted_iCatches", type="integer", nullable=true)
     */
    private $homeInflictedIcatches;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Inflicted_iInterceptions", type="integer", nullable=true)
     */
    private $homeInflictedIinterceptions;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Inflicted_iTouchdowns", type="integer", nullable=true)
     */
    private $homeInflictedItouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Inflicted_iCasualties", type="integer", nullable=true)
     */
    private $homeInflictedIcasualties;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Inflicted_iTackles", type="integer", nullable=true)
     */
    private $homeInflictedItackles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Inflicted_iKO", type="integer", nullable=true)
     */
    private $homeInflictedIko;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Inflicted_iInjuries", type="integer", nullable=true)
     */
    private $homeInflictedIinjuries;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Inflicted_iDead", type="integer", nullable=true)
     */
    private $homeInflictedIdead;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Inflicted_iMetersRunning", type="integer", nullable=true)
     */
    private $homeInflictedImetersrunning;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Inflicted_iMetersPassing", type="integer", nullable=true)
     */
    private $homeInflictedImeterspassing;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Sustained_iPasses", type="integer", nullable=true)
     */
    private $homeSustainedIpasses;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Sustained_iCatches", type="integer", nullable=true)
     */
    private $homeSustainedIcatches;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Sustained_iInterceptions", type="integer", nullable=true)
     */
    private $homeSustainedIinterceptions;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Sustained_iTouchdowns", type="integer", nullable=true)
     */
    private $homeSustainedItouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Sustained_iCasualties", type="integer", nullable=true)
     */
    private $homeSustainedIcasualties;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Sustained_iTackles", type="integer", nullable=true)
     */
    private $homeSustainedItackles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Sustained_iKO", type="integer", nullable=true)
     */
    private $homeSustainedIko;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Sustained_iInjuries", type="integer", nullable=true)
     */
    private $homeSustainedIinjuries;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Sustained_iDead", type="integer", nullable=true)
     */
    private $homeSustainedIdead;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Sustained_iMetersRunning", type="integer", nullable=true)
     */
    private $homeSustainedImetersrunning;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_Sustained_iMetersPassing", type="integer", nullable=true)
     */
    private $homeSustainedImeterspassing;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_iMetersRunning", type="integer", nullable=true)
     */
    private $homeImetersrunning;

    /**
     * @var integer
     *
     * @ORM\Column(name="Home_iMetersPassing", type="integer", nullable=true)
     */
    private $homeImeterspassing;

    /**
     * @var integer
     *
     * @ORM\Column(name="iSpectators", type="integer", nullable=true)
     */
    private $ispectators;

    /**
     * @var integer
     *
     * @ORM\Column(name="iRating", type="integer", nullable=true)
     */
    private $irating;

    /**
     * @var integer
     *
     * @ORM\Column(name="bPlayed", type="integer", nullable=true)
     */
    private $bplayed;


}
