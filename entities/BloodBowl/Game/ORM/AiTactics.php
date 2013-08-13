<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * AiTactics
 *
 * @ORM\Table(name="AI_Tactics")
 * @ORM\Entity
 */
class AiTactics
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
     * @ORM\Column(name="idTeam_Listing", type="integer", nullable=true)
     */
    private $idteamListing;

    /**
     * @var string
     *
     * @ORM\Column(name="iList_AI_Character_Role_Types", type="string", length=255, nullable=false)
     */
    private $ilistAiCharacterRoleTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized", type="integer", nullable=true)
     */
    private $idstringsLocalized;

    /**
     * @var string
     *
     * @ORM\Column(name="strName", type="string", length=255, nullable=true)
     */
    private $strname;


}
