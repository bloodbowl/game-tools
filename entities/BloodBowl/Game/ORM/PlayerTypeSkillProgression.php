<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerTypeSkillProgression
 *
 * @ORM\Table(name="Player_Type_Skill_Progression")
 * @ORM\Entity
 */
class PlayerTypeSkillProgression
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
     * @ORM\Column(name="idPlayer_Types", type="integer", nullable=true)
     */
    private $idplayerTypes;

    /**
     * @var string
     *
     * @ORM\Column(name="strSkills", type="string", length=255, nullable=false)
     */
    private $strskills;


}
