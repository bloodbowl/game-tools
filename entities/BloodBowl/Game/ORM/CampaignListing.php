<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * CampaignListing
 *
 * @ORM\Table(name="Campaign_Listing")
 * @ORM\Entity
 */
class CampaignListing
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
     * @ORM\Column(name="iPeriod", type="integer", nullable=true)
     */
    private $iperiod;

    /**
     * @var string
     *
     * @ORM\Column(name="strChampionshipRule", type="string", length=255, nullable=false)
     */
    private $strchampionshiprule;

    /**
     * @var string
     *
     * @ORM\Column(name="strLogo", type="string", length=255, nullable=true)
     */
    private $strlogo;

    /**
     * @var string
     *
     * @ORM\Column(name="strSpecialRules", type="string", length=255, nullable=true)
     */
    private $strspecialrules;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized_Name", type="integer", nullable=false)
     */
    private $idstringsLocalizedName;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Formatted_Background", type="integer", nullable=false)
     */
    private $idstringsFormattedBackground;

    /**
     * @var integer
     *
     * @ORM\Column(name="Reward_iMinPrestige", type="integer", nullable=true)
     */
    private $rewardIminprestige;

    /**
     * @var integer
     *
     * @ORM\Column(name="Reward_iMaxPrestige", type="integer", nullable=true)
     */
    private $rewardImaxprestige;

    /**
     * @var integer
     *
     * @ORM\Column(name="iMinimumRequiredPrestige", type="integer", nullable=true)
     */
    private $iminimumrequiredprestige;

    /**
     * @var integer
     *
     * @ORM\Column(name="bPlayed", type="integer", nullable=true)
     */
    private $bplayed;

    /**
     * @var integer
     *
     * @ORM\Column(name="bUnlocked", type="integer", nullable=true)
     */
    private $bunlocked;


}
