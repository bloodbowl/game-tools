<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatisticsTeams
 *
 * @ORM\Table(name="Statistics_Teams")
 * @ORM\Entity
 */
class StatisticsTeams
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
     * @ORM\Column(name="idTeam_Listing", type="integer", nullable=true)
     */
    private $idteamListing;

    /**
     * @var integer
     *
     * @ORM\Column(name="iMatchPlayed", type="integer", nullable=true)
     */
    private $imatchplayed;

    /**
     * @var integer
     *
     * @ORM\Column(name="iMVP", type="integer", nullable=true)
     */
    private $imvp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Inflicted_iPasses", type="integer", nullable=true)
     */
    private $inflictedIpasses;

    /**
     * @var integer
     *
     * @ORM\Column(name="Inflicted_iCatches", type="integer", nullable=true)
     */
    private $inflictedIcatches;

    /**
     * @var integer
     *
     * @ORM\Column(name="Inflicted_iInterceptions", type="integer", nullable=true)
     */
    private $inflictedIinterceptions;

    /**
     * @var integer
     *
     * @ORM\Column(name="Inflicted_iTouchdowns", type="integer", nullable=true)
     */
    private $inflictedItouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(name="Inflicted_iCasualties", type="integer", nullable=true)
     */
    private $inflictedIcasualties;

    /**
     * @var integer
     *
     * @ORM\Column(name="Inflicted_iTackles", type="integer", nullable=true)
     */
    private $inflictedItackles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Inflicted_iKO", type="integer", nullable=true)
     */
    private $inflictedIko;

    /**
     * @var integer
     *
     * @ORM\Column(name="Inflicted_iInjuries", type="integer", nullable=true)
     */
    private $inflictedIinjuries;

    /**
     * @var integer
     *
     * @ORM\Column(name="Inflicted_iDead", type="integer", nullable=true)
     */
    private $inflictedIdead;

    /**
     * @var integer
     *
     * @ORM\Column(name="Inflicted_iMetersRunning", type="integer", nullable=true)
     */
    private $inflictedImetersrunning;

    /**
     * @var integer
     *
     * @ORM\Column(name="Inflicted_iMetersPassing", type="integer", nullable=true)
     */
    private $inflictedImeterspassing;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sustained_iPasses", type="integer", nullable=true)
     */
    private $sustainedIpasses;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sustained_iCatches", type="integer", nullable=true)
     */
    private $sustainedIcatches;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sustained_iInterceptions", type="integer", nullable=true)
     */
    private $sustainedIinterceptions;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sustained_iTouchdowns", type="integer", nullable=true)
     */
    private $sustainedItouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sustained_iCasualties", type="integer", nullable=true)
     */
    private $sustainedIcasualties;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sustained_iTackles", type="integer", nullable=true)
     */
    private $sustainedItackles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sustained_iKO", type="integer", nullable=true)
     */
    private $sustainedIko;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sustained_iInjuries", type="integer", nullable=true)
     */
    private $sustainedIinjuries;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sustained_iDead", type="integer", nullable=true)
     */
    private $sustainedIdead;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sustained_iMetersRunning", type="integer", nullable=true)
     */
    private $sustainedImetersrunning;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sustained_iMetersPassing", type="integer", nullable=true)
     */
    private $sustainedImeterspassing;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPoints", type="integer", nullable=true)
     */
    private $ipoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="iWins", type="integer", nullable=true)
     */
    private $iwins;

    /**
     * @var integer
     *
     * @ORM\Column(name="iDraws", type="integer", nullable=true)
     */
    private $idraws;

    /**
     * @var integer
     *
     * @ORM\Column(name="iLoss", type="integer", nullable=true)
     */
    private $iloss;

    /**
     * @var integer
     *
     * @ORM\Column(name="iBestMatchRating", type="integer", nullable=true)
     */
    private $ibestmatchrating;

    /**
     * @var integer
     *
     * @ORM\Column(name="Average_iMatchRating", type="integer", nullable=true)
     */
    private $averageImatchrating;

    /**
     * @var integer
     *
     * @ORM\Column(name="Average_iSpectators", type="integer", nullable=true)
     */
    private $averageIspectators;

    /**
     * @var integer
     *
     * @ORM\Column(name="Average_iCashEarned", type="integer", nullable=true)
     */
    private $averageIcashearned;

    /**
     * @var integer
     *
     * @ORM\Column(name="iSpectators", type="integer", nullable=true)
     */
    private $ispectators;

    /**
     * @var integer
     *
     * @ORM\Column(name="iCashEarned", type="integer", nullable=true)
     */
    private $icashearned;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPossessionBall", type="integer", nullable=true)
     */
    private $ipossessionball;

    /**
     * @var integer
     *
     * @ORM\Column(name="Occupation_iOwn", type="integer", nullable=true)
     */
    private $occupationIown;

    /**
     * @var integer
     *
     * @ORM\Column(name="Occupation_iTheir", type="integer", nullable=true)
     */
    private $occupationItheir;


}
