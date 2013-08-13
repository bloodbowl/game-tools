<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorldcupTournamentsQualifiedteams
 *
 * @ORM\Table(name="WorldCup_Tournaments_QualifiedTeams")
 * @ORM\Entity
 */
class WorldcupTournamentsQualifiedteams
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
     * @ORM\Column(name="idWorldCup_Tournaments", type="integer", nullable=true)
     */
    private $idworldcupTournaments;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTeam_Listing", type="integer", nullable=true)
     */
    private $idteamListing;


}
