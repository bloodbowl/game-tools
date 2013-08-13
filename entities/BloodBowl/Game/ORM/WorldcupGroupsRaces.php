<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorldcupGroupsRaces
 *
 * @ORM\Table(name="WorldCup_Groups_Races")
 * @ORM\Entity
 */
class WorldcupGroupsRaces
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
     * @ORM\Column(name="idWorldCup_Groups", type="integer", nullable=true)
     */
    private $idworldcupGroups;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRaces", type="integer", nullable=true)
     */
    private $idraces;


}
