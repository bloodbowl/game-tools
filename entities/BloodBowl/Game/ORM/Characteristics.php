<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * Characteristics
 *
 * @ORM\Table(name="Characteristics")
 * @ORM\Entity
 */
class Characteristics
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
     * @ORM\Column(name="idStrings_Localized_Abbreviation", type="integer", nullable=true)
     */
    private $idstringsLocalizedAbbreviation;

    /**
     * @var float
     *
     * @ORM\Column(name="fEquivalence", type="float", precision=10, scale=0, nullable=true)
     */
    private $fequivalence;

    /**
     * @var float
     *
     * @ORM\Column(name="Training_fMaxModifier", type="float", precision=10, scale=0, nullable=true)
     */
    private $trainingFmaxmodifier;

    /**
     * @var float
     *
     * @ORM\Column(name="Training_fBaseModifier", type="float", precision=10, scale=0, nullable=true)
     */
    private $trainingFbasemodifier;

    /**
     * @var integer
     *
     * @ORM\Column(name="Training_iAIModifier", type="integer", nullable=true)
     */
    private $trainingIaimodifier;

    /**
     * @var float
     *
     * @ORM\Column(name="fMaxValue", type="float", precision=10, scale=0, nullable=true)
     */
    private $fmaxvalue;


}
