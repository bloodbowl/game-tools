<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerTrainings
 *
 * @ORM\Table(name="Player_Trainings")
 * @ORM\Entity
 */
class PlayerTrainings
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
     * @ORM\Column(name="idPlayer_Listing", type="integer", nullable=false)
     */
    private $idplayerListing;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCharacteristics", type="integer", nullable=true)
     */
    private $idcharacteristics;

    /**
     * @var float
     *
     * @ORM\Column(name="fModifier", type="float", precision=10, scale=0, nullable=true)
     */
    private $fmodifier;


}
