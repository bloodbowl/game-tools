<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamRankings
 *
 * @ORM\Table(name="Team_Rankings")
 * @ORM\Entity
 */
class TeamRankings
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
     * @ORM\Column(name="idRule_Types", type="integer", nullable=true)
     */
    private $idruleTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="iSeason", type="integer", nullable=true)
     */
    private $iseason;

    /**
     * @var integer
     *
     * @ORM\Column(name="iGroup", type="integer", nullable=true)
     */
    private $igroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPoints", type="integer", nullable=true)
     */
    private $ipoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="iRanking", type="integer", nullable=true)
     */
    private $iranking;

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
     * @ORM\Column(name="iLosses", type="integer", nullable=true)
     */
    private $ilosses;

    /**
     * @var integer
     *
     * @ORM\Column(name="iTeamValue", type="integer", nullable=true)
     */
    private $iteamvalue;


}
