<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamBuyableitems
 *
 * @ORM\Table(name="Team_BuyableItems")
 * @ORM\Entity
 */
class TeamBuyableitems
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
     * @ORM\Column(name="idStrings_Localized", type="integer", nullable=true)
     */
    private $idstringsLocalized;

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
     * @var integer
     *
     * @ORM\Column(name="idStrings_Formated", type="integer", nullable=true)
     */
    private $idstringsFormated;


}
