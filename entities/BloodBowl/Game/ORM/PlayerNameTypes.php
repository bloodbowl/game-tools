<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerNameTypes
 *
 * @ORM\Table(name="Player_Name_Types")
 * @ORM\Entity
 */
class PlayerNameTypes
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
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="iRandomSeed", type="integer", nullable=true)
     */
    private $irandomseed;

    /**
     * @var integer
     *
     * @ORM\Column(name="iRandomIndex", type="integer", nullable=true)
     */
    private $irandomindex;


}
