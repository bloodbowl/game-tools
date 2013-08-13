<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerSkills
 *
 * @ORM\Table(name="Player_Skills")
 * @ORM\Entity
 */
class PlayerSkills
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
     * @ORM\Column(name="idPlayer_Listing", type="integer", nullable=true)
     */
    private $idplayerListing;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSkill_Listing", type="integer", nullable=true)
     */
    private $idskillListing;


}
