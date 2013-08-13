<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * AiCharacterRoles
 *
 * @ORM\Table(name="AI_Character_Roles")
 * @ORM\Entity
 */
class AiCharacterRoles
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
     * @ORM\Column(name="idAI_Character_Role_Types", type="integer", nullable=true)
     */
    private $idaiCharacterRoleTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized", type="integer", nullable=true)
     */
    private $idstringsLocalized;


}
