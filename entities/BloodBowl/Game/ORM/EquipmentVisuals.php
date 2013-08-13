<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipmentVisuals
 *
 * @ORM\Table(name="Equipment_Visuals")
 * @ORM\Entity
 */
class EquipmentVisuals
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
     * @ORM\Column(name="iSet", type="integer", nullable=false)
     */
    private $iset;


}
