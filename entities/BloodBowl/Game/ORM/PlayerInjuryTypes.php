<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerInjuryTypes
 *
 * @ORM\Table(name="Player_Injury_Types")
 * @ORM\Entity
 */
class PlayerInjuryTypes
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
     * @ORM\Column(name="idStringsLocalized", type="integer", nullable=true)
     */
    private $idstringslocalized;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCharacteristics", type="integer", nullable=true)
     */
    private $idcharacteristics;

    /**
     * @var integer
     *
     * @ORM\Column(name="iProbability", type="integer", nullable=true)
     */
    private $iprobability;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_CONSTANT", type="string", length=255, nullable=true)
     */
    private $dataConstant;


}
