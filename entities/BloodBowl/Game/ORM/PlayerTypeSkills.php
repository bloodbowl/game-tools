<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerTypeSkills
 *
 * @ORM\Table(name="Player_Type_Skills")
 * @ORM\Entity
 */
class PlayerTypeSkills
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
     * @ORM\Column(name="idPlayer_Types", type="integer", nullable=true)
     */
    private $idplayerTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSkill_Listing", type="integer", nullable=true)
     */
    private $idskillListing;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true)
     */
    private $description;


}
