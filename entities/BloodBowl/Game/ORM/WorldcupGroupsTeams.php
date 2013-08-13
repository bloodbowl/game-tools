<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorldcupGroupsTeams
 *
 * @ORM\Table(name="WorldCup_Groups_Teams")
 * @ORM\Entity
 */
class WorldcupGroupsTeams
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
     * @ORM\Column(name="idWorldCup_Groups", type="integer", nullable=false)
     */
    private $idworldcupGroups;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTeam_Listing", type="integer", nullable=false)
     */
    private $idteamListing;

    /**
     * @var integer
     *
     * @ORM\Column(name="iRanking", type="integer", nullable=true)
     */
    private $iranking;


}
