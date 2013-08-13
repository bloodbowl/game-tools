<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * SponsorObjectives
 *
 * @ORM\Table(name="Sponsor_Objectives")
 * @ORM\Entity
 */
class SponsorObjectives
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
     * @ORM\Column(name="CONSTANT", type="string", length=255, nullable=false)
     */
    private $constant;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Formatted", type="integer", nullable=true)
     */
    private $idstringsFormatted;

    /**
     * @var integer
     *
     * @ORM\Column(name="iObjective", type="integer", nullable=true)
     */
    private $iobjective;

    /**
     * @var integer
     *
     * @ORM\Column(name="iObjectiveValue", type="integer", nullable=true)
     */
    private $iobjectivevalue;


}
