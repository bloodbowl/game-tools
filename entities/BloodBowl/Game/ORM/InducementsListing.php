<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * InducementsListing
 *
 * @ORM\Table(name="Inducements_Listing")
 * @ORM\Entity
 */
class InducementsListing
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
     * @ORM\Column(name="idInducements", type="integer", nullable=false)
     */
    private $idinducements;

    /**
     * @var integer
     *
     * @ORM\Column(name="iNb", type="integer", nullable=true)
     */
    private $inb;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPlayer_Listing", type="integer", nullable=false)
     */
    private $idplayerListing;

    /**
     * @var integer
     *
     * @ORM\Column(name="bSuccessful", type="integer", nullable=true)
     */
    private $bsuccessful;


}
