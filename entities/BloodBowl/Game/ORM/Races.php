<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * Races
 *
 * @ORM\Table(name="Races")
 * @ORM\Entity
 */
class Races
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
     * @ORM\Column(name="DATA_CONSTANT", type="string", length=255, nullable=true)
     */
    private $dataConstant;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized", type="integer", nullable=true)
     */
    private $idstringsLocalized;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized_Info", type="integer", nullable=true)
     */
    private $idstringsLocalizedInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="strName", type="string", length=255, nullable=false)
     */
    private $strname;

    /**
     * @var integer
     *
     * @ORM\Column(name="iRerollPrice", type="integer", nullable=true)
     */
    private $irerollprice;


}
