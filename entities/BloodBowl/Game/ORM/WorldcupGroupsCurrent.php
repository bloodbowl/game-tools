<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorldcupGroupsCurrent
 *
 * @ORM\Table(name="WorldCup_Groups_Current")
 * @ORM\Entity
 */
class WorldcupGroupsCurrent
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


}
