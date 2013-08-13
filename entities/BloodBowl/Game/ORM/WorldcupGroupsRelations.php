<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorldcupGroupsRelations
 *
 * @ORM\Table(name="WorldCup_Groups_Relations")
 * @ORM\Entity
 */
class WorldcupGroupsRelations
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
     * @ORM\Column(name="idWorldCup_Groups_Parent", type="integer", nullable=true)
     */
    private $idworldcupGroupsParent;


}
