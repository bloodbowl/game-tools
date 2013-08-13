<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatisticsSeasonPlayers
 *
 * @ORM\Table(name="Statistics_Season_Players")
 * @ORM\Entity
 */
class StatisticsSeasonPlayers
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
     * @ORM\Column(name="idPlayer_Listing", type="integer", nullable=true)
     */
    private $idplayerListing;

    /**
     * @var integer
     *
     * @ORM\Column(name="iSeason", type="integer", nullable=true)
     */
    private $iseason;

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
     * @ORM\Column(name="Inflicted_iStuns", type="integer", nullable=true)
     */
    private $inflictedIstuns;

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
     * @ORM\Column(name="Sustained_iInterceptions", type="integer", nullable=true)
     */
    private $sustainedIinterceptions;

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
     * @ORM\Column(name="Sustained_iStuns", type="integer", nullable=true)
     */
    private $sustainedIstuns;

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


}
