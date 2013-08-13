<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * RaceSpells
 *
 * @ORM\Table(name="Race_Spells")
 * @ORM\Entity
 */
class RaceSpells
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
     * @ORM\Column(name="idRaces", type="integer", nullable=true)
     */
    private $idraces;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized", type="integer", nullable=true)
     */
    private $idstringsLocalized;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized_Info", type="integer", nullable=true)
     */
    private $idstringsLocalizedInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPrice", type="integer", nullable=true)
     */
    private $iprice;


}
