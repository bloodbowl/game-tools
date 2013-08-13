<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorldcupGroups
 *
 * @ORM\Table(name="WorldCup_Groups")
 * @ORM\Entity
 */
class WorldcupGroups
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
     * @ORM\Column(name="idRule_Types", type="integer", nullable=false)
     */
    private $idruleTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="idWorldCup_Tournaments", type="integer", nullable=false)
     */
    private $idworldcupTournaments;

    /**
     * @var integer
     *
     * @ORM\Column(name="iGroupIndex", type="integer", nullable=false)
     */
    private $igroupindex;

    /**
     * @var integer
     *
     * @ORM\Column(name="iDuration", type="integer", nullable=false)
     */
    private $iduration;

    /**
     * @var integer
     *
     * @ORM\Column(name="iNbTeams", type="integer", nullable=false)
     */
    private $inbteams;

    /**
     * @var integer
     *
     * @ORM\Column(name="iNbQualifiedTeams", type="integer", nullable=false)
     */
    private $inbqualifiedteams;


}
