<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * AiPositions
 *
 * @ORM\Table(name="AI_Positions")
 * @ORM\Entity
 */
class AiPositions
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
     * @ORM\Column(name="idAI_Tactics", type="integer", nullable=true)
     */
    private $idaiTactics;

    /**
     * @var string
     *
     * @ORM\Column(name="iList_Cell", type="string", length=255, nullable=true)
     */
    private $ilistCell;

    /**
     * @var string
     *
     * @ORM\Column(name="iList_idAI_Character_Role_Types", type="string", length=255, nullable=true)
     */
    private $ilistIdaiCharacterRoleTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="iRosterNumber", type="integer", nullable=true)
     */
    private $irosternumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="Attack_idAI_Character_Roles", type="integer", nullable=true)
     */
    private $attackIdaiCharacterRoles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Defense_idAI_Character_Roles", type="integer", nullable=true)
     */
    private $defenseIdaiCharacterRoles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Priority", type="integer", nullable=true)
     */
    private $priority;


}
