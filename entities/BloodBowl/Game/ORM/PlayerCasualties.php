<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerCasualties
 *
 * @ORM\Table(name="Player_Casualties")
 * @ORM\Entity
 */
class PlayerCasualties
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
     * @ORM\Column(name="idPlayer_Casualty_Types", type="integer", nullable=true)
     */
    private $idplayerCasualtyTypes;


}
