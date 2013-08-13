<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerLevels
 *
 * @ORM\Table(name="Player_Levels")
 * @ORM\Entity
 */
class PlayerLevels
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
     * @ORM\Column(name="CONSTANT", type="string", length=255, nullable=true)
     */
    private $constant;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized", type="integer", nullable=true)
     */
    private $idstringsLocalized;

    /**
     * @var integer
     *
     * @ORM\Column(name="iLevel", type="integer", nullable=true)
     */
    private $ilevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="iMaxExperience", type="integer", nullable=true)
     */
    private $imaxexperience;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPreferredContractDuration", type="integer", nullable=true)
     */
    private $ipreferredcontractduration;


}
