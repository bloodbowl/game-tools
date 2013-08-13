<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrainingLoadTypes
 *
 * @ORM\Table(name="Training_Load_Types")
 * @ORM\Entity
 */
class TrainingLoadTypes
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
     * @ORM\Column(name="idStrings_Localized", type="integer", nullable=true)
     */
    private $idstringsLocalized;

    /**
     * @var float
     *
     * @ORM\Column(name="Modifier_fProgressSpeed", type="float", precision=10, scale=0, nullable=true)
     */
    private $modifierFprogressspeed;

    /**
     * @var float
     *
     * @ORM\Column(name="Modifier_fDuration", type="float", precision=10, scale=0, nullable=true)
     */
    private $modifierFduration;


}
