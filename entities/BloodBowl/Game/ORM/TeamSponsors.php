<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamSponsors
 *
 * @ORM\Table(name="Team_Sponsors")
 * @ORM\Entity
 */
class TeamSponsors
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
     * @ORM\Column(name="idSponsor_Names", type="integer", nullable=true)
     */
    private $idsponsorNames;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTeam_Listing", type="integer", nullable=true)
     */
    private $idteamListing;

    /**
     * @var integer
     *
     * @ORM\Column(name="iRelationship", type="integer", nullable=true)
     */
    private $irelationship;

    /**
     * @var integer
     *
     * @ORM\Column(name="iWinRatio", type="integer", nullable=true)
     */
    private $iwinratio;

    /**
     * @var integer
     *
     * @ORM\Column(name="iCurrentWinRatio", type="integer", nullable=true)
     */
    private $icurrentwinratio;

    /**
     * @var integer
     *
     * @ORM\Column(name="iNbFirstInStatistic", type="integer", nullable=true)
     */
    private $inbfirstinstatistic;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSponsor_Objectives", type="integer", nullable=true)
     */
    private $idsponsorObjectives;

    /**
     * @var integer
     *
     * @ORM\Column(name="iObjective", type="integer", nullable=true)
     */
    private $iobjective;

    /**
     * @var integer
     *
     * @ORM\Column(name="bSigned", type="integer", nullable=true)
     */
    private $bsigned;


}
