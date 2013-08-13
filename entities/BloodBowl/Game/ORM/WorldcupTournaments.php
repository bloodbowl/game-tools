<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorldcupTournaments
 *
 * @ORM\Table(name="WorldCup_Tournaments")
 * @ORM\Entity
 */
class WorldcupTournaments
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
     * @ORM\Column(name="idStrings_Localized", type="integer", nullable=true)
     */
    private $idstringsLocalized;

    /**
     * @var integer
     *
     * @ORM\Column(name="idWorldCup_Phases", type="integer", nullable=true)
     */
    private $idworldcupPhases;

    /**
     * @var integer
     *
     * @ORM\Column(name="iNbTeams", type="integer", nullable=true)
     */
    private $inbteams;

    /**
     * @var integer
     *
     * @ORM\Column(name="iNbQualified", type="integer", nullable=true)
     */
    private $inbqualified;


}
