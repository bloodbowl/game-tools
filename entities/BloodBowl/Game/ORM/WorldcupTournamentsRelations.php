<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorldcupTournamentsRelations
 *
 * @ORM\Table(name="WorldCup_Tournaments_Relations")
 * @ORM\Entity
 */
class WorldcupTournamentsRelations
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
     * @ORM\Column(name="idWorldCup_Tournaments_Parent", type="integer", nullable=true)
     */
    private $idworldcupTournamentsParent;


}
