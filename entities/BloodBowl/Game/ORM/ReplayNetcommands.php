<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReplayNetcommands
 *
 * @ORM\Table(name="Replay_NetCommands")
 * @ORM\Entity
 */
class ReplayNetcommands
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
     * @ORM\Column(name="iTurn", type="integer", nullable=true)
     */
    private $iturn;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPlayerIndex", type="integer", nullable=true)
     */
    private $iplayerindex;

    /**
     * @var integer
     *
     * @ORM\Column(name="iType", type="integer", nullable=true)
     */
    private $itype;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPart1", type="integer", nullable=true)
     */
    private $ipart1;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPart2", type="integer", nullable=true)
     */
    private $ipart2;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPart3", type="integer", nullable=true)
     */
    private $ipart3;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPart4", type="integer", nullable=true)
     */
    private $ipart4;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPart5", type="integer", nullable=true)
     */
    private $ipart5;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPart6", type="integer", nullable=true)
     */
    private $ipart6;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPart7", type="integer", nullable=true)
     */
    private $ipart7;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPart8", type="integer", nullable=true)
     */
    private $ipart8;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPart9", type="integer", nullable=true)
     */
    private $ipart9;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPart10", type="integer", nullable=true)
     */
    private $ipart10;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPart11", type="integer", nullable=true)
     */
    private $ipart11;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPart12", type="integer", nullable=true)
     */
    private $ipart12;


}
