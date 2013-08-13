<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamPrestiges
 *
 * @ORM\Table(name="Team_Prestiges")
 * @ORM\Entity
 */
class TeamPrestiges
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
     * @ORM\Column(name="idTeam_Listing", type="integer", nullable=true)
     */
    private $idteamListing;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPrestige", type="integer", nullable=true)
     */
    private $iprestige;


}
