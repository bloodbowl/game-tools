<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerTypeSkillCategoriesNormal
 *
 * @ORM\Table(name="Player_Type_Skill_Categories_Normal")
 * @ORM\Entity
 */
class PlayerTypeSkillCategoriesNormal
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
     * @var integer
     *
     * @ORM\Column(name="idSkill_Categories", type="integer", nullable=true)
     */
    private $idskillCategories;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true)
     */
    private $description;


}
