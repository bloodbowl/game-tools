<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorldcupSettings
 *
 * @ORM\Table(name="WorldCup_Settings")
 * @ORM\Entity
 */
class WorldcupSettings
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
     * @ORM\Column(name="idWorldCup_Groups_User", type="integer", nullable=false)
     */
    private $idworldcupGroupsUser;


}
