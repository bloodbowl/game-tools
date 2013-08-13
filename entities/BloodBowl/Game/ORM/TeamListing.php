<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamListing
 *
 * @ORM\Table(name="Team_Listing")
 * @ORM\Entity
 */
class TeamListing
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
     * @var integer
     *
     * @ORM\Column(name="idRaces", type="integer", nullable=false)
     */
    private $idraces;

    /**
     * @var string
     *
     * @ORM\Column(name="strLogo", type="string", length=255, nullable=false)
     */
    private $strlogo;

    /**
     * @var integer
     *
     * @ORM\Column(name="iTeamColor", type="integer", nullable=true)
     */
    private $iteamcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="strLeitmotiv", type="text", nullable=true)
     */
    private $strleitmotiv;

    /**
     * @var string
     *
     * @ORM\Column(name="strBackground", type="text", nullable=true)
     */
    private $strbackground;

    /**
     * @var integer
     *
     * @ORM\Column(name="iValue", type="integer", nullable=true)
     */
    private $ivalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="iPopularity", type="integer", nullable=true)
     */
    private $ipopularity;

    /**
     * @var integer
     *
     * @ORM\Column(name="iCash", type="integer", nullable=true)
     */
    private $icash;

    /**
     * @var integer
     *
     * @ORM\Column(name="iCheerleaders", type="integer", nullable=true)
     */
    private $icheerleaders;

    /**
     * @var integer
     *
     * @ORM\Column(name="iBalms", type="integer", nullable=true)
     */
    private $ibalms;

    /**
     * @var integer
     *
     * @ORM\Column(name="bApothecary", type="integer", nullable=true)
     */
    private $bapothecary;

    /**
     * @var integer
     *
     * @ORM\Column(name="iRerolls", type="integer", nullable=true)
     */
    private $irerolls;

    /**
     * @var integer
     *
     * @ORM\Column(name="bEdited", type="integer", nullable=true)
     */
    private $bedited;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTeam_Listing_Filters", type="integer", nullable=false)
     */
    private $idteamListingFilters;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Formatted_Background", type="integer", nullable=true)
     */
    private $idstringsFormattedBackground;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized_Leitmotiv", type="integer", nullable=true)
     */
    private $idstringsLocalizedLeitmotiv;

    /**
     * @var integer
     *
     * @ORM\Column(name="iNextPurchase", type="integer", nullable=true)
     */
    private $inextpurchase;

    /**
     * @var integer
     *
     * @ORM\Column(name="iAssistantCoaches", type="integer", nullable=true)
     */
    private $iassistantcoaches;


}
