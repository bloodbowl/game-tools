<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrophyListing
 *
 * @ORM\Table(name="Trophy_Listing")
 * @ORM\Entity
 */
class TrophyListing
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
     * @ORM\Column(name="idMatch_Listing", type="integer", nullable=true)
     */
    private $idmatchListing;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCalendar", type="integer", nullable=true)
     */
    private $idcalendar;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTeam_Listing", type="integer", nullable=true)
     */
    private $idteamListing;

    /**
     * @var integer
     *
     * @ORM\Column(name="iSeason", type="integer", nullable=true)
     */
    private $iseason;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRule_Types", type="integer", nullable=true)
     */
    private $idruleTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="iGroup", type="integer", nullable=true)
     */
    private $igroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCampaign_Listing", type="integer", nullable=true)
     */
    private $idcampaignListing;


}
