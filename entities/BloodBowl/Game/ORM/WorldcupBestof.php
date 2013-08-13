<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorldcupBestof
 *
 * @ORM\Table(name="WorldCup_BestOf")
 * @ORM\Entity
 */
class WorldcupBestof
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
     * @ORM\Column(name="iBestOf", type="integer", nullable=true)
     */
    private $ibestof;

    /**
     * @var integer
     *
     * @ORM\Column(name="iDay", type="integer", nullable=true)
     */
    private $iday;


}
