<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * NegotiationConditionTypes
 *
 * @ORM\Table(name="Negotiation_Condition_Types")
 * @ORM\Entity
 */
class NegotiationConditionTypes
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


}
