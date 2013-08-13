<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillListing
 *
 * @ORM\Table(name="Skill_Listing")
 * @ORM\Entity
 */
class SkillListing
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
     * @ORM\Column(name="DATA_CONSTANT", type="string", length=255, nullable=true)
     */
    private $dataConstant;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized", type="integer", nullable=true)
     */
    private $idstringsLocalized;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Formatted_Info", type="integer", nullable=true)
     */
    private $idstringsFormattedInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSkill_Categories", type="integer", nullable=true)
     */
    private $idskillCategories;

    /**
     * @var float
     *
     * @ORM\Column(name="fBonus", type="float", precision=10, scale=0, nullable=true)
     */
    private $fbonus;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="iCooldown", type="integer", nullable=true)
     */
    private $icooldown;

    /**
     * @var integer
     *
     * @ORM\Column(name="iDuration", type="integer", nullable=true)
     */
    private $iduration;

    /**
     * @var integer
     *
     * @ORM\Column(name="AI_iWeight", type="integer", nullable=true)
     */
    private $aiIweight;


}
