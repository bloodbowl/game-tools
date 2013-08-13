<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coach
 *
 * @ORM\Table(name="Coach")
 * @ORM\Entity
 */
class Coach
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
     * @ORM\Column(name="strName", type="string", length=255, nullable=false)
     */
    private $strname;

    /**
     * @var string
     *
     * @ORM\Column(name="strTag_Voice", type="string", length=255, nullable=false)
     */
    private $strtagVoice;

    /**
     * @var string
     *
     * @ORM\Column(name="strTag_Head", type="string", length=255, nullable=false)
     */
    private $strtagHead;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statistics_iMatchPlayed", type="integer", nullable=true)
     */
    private $statisticsImatchplayed;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statistics_iWins", type="integer", nullable=true)
     */
    private $statisticsIwins;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statistics_iDraws", type="integer", nullable=true)
     */
    private $statisticsIdraws;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statistics_iLoss", type="integer", nullable=true)
     */
    private $statisticsIloss;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statistics_iTouchdowns", type="integer", nullable=true)
     */
    private $statisticsItouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statistics_Inflicted_iExclusions", type="integer", nullable=true)
     */
    private $statisticsInflictedIexclusions;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statistics_Taken_iExclusions", type="integer", nullable=true)
     */
    private $statisticsTakenIexclusions;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statistics_Taken_iTouchdowns", type="integer", nullable=true)
     */
    private $statisticsTakenItouchdowns;


}
