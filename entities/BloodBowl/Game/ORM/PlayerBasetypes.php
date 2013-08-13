<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerBasetypes
 *
 * @ORM\Table(name="Player_BaseTypes")
 * @ORM\Entity
 */
class PlayerBasetypes
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
     * @ORM\Column(name="Experience_iPassingCompletion", type="integer", nullable=true)
     */
    private $experienceIpassingcompletion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Experience_iCasualty", type="integer", nullable=true)
     */
    private $experienceIcasualty;

    /**
     * @var integer
     *
     * @ORM\Column(name="Experience_iInterception", type="integer", nullable=true)
     */
    private $experienceIinterception;

    /**
     * @var integer
     *
     * @ORM\Column(name="Experience_iTouchdown", type="integer", nullable=true)
     */
    private $experienceItouchdown;

    /**
     * @var integer
     *
     * @ORM\Column(name="Experience_iMVP", type="integer", nullable=true)
     */
    private $experienceImvp;

    /**
     * @var integer
     *
     * @ORM\Column(name="AITraining_idCharacteristics", type="integer", nullable=true)
     */
    private $aitrainingIdcharacteristics;


}
