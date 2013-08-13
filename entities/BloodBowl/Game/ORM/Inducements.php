<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inducements
 *
 * @ORM\Table(name="Inducements")
 * @ORM\Entity
 */
class Inducements
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
     * @ORM\Column(name="idInducement_Types", type="integer", nullable=true)
     */
    private $idinducementTypes;

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
     * @ORM\Column(name="idStrings_Formatted_Succeed", type="integer", nullable=true)
     */
    private $idstringsFormattedSucceed;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Formatted_Failed", type="integer", nullable=true)
     */
    private $idstringsFormattedFailed;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPrice", type="integer", nullable=true)
     */
    private $iprice;

    /**
     * @var integer
     *
     * @ORM\Column(name="iMaxQuantity", type="integer", nullable=true)
     */
    private $imaxquantity;

    /**
     * @var float
     *
     * @ORM\Column(name="fBonus", type="float", precision=10, scale=0, nullable=true)
     */
    private $fbonus;

    /**
     * @var integer
     *
     * @ORM\Column(name="bTargetOpponent", type="integer", nullable=true)
     */
    private $btargetopponent;


}
