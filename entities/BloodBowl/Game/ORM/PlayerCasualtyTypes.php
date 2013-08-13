<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerCasualtyTypes
 *
 * @ORM\Table(name="Player_Casualty_Types")
 * @ORM\Entity
 */
class PlayerCasualtyTypes
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
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized_Effect", type="integer", nullable=true)
     */
    private $idstringsLocalizedEffect;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCaracs", type="integer", nullable=true)
     */
    private $idcaracs;

    /**
     * @var integer
     *
     * @ORM\Column(name="iProbability", type="integer", nullable=true)
     */
    private $iprobability;

    /**
     * @var integer
     *
     * @ORM\Column(name="bPersistent", type="integer", nullable=true)
     */
    private $bpersistent;

    /**
     * @var integer
     *
     * @ORM\Column(name="bNextMatchSuspended", type="integer", nullable=true)
     */
    private $bnextmatchsuspended;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true)
     */
    private $description;


}
