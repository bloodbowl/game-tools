<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillCategories
 *
 * @ORM\Table(name="Skill_Categories")
 * @ORM\Entity
 */
class SkillCategories
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


}
