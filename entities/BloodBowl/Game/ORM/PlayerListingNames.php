<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerListingNames
 *
 * @ORM\Table(name="Player_Listing_Names")
 * @ORM\Entity
 */
class PlayerListingNames
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
     * @ORM\Column(name="English", type="string", length=255, nullable=false)
     */
    private $english;

    /**
     * @var string
     *
     * @ORM\Column(name="French", type="string", length=255, nullable=false)
     */
    private $french;

    /**
     * @var string
     *
     * @ORM\Column(name="Italian", type="string", length=255, nullable=false)
     */
    private $italian;

    /**
     * @var string
     *
     * @ORM\Column(name="German", type="string", length=255, nullable=false)
     */
    private $german;

    /**
     * @var string
     *
     * @ORM\Column(name="Russian", type="string", length=255, nullable=false)
     */
    private $russian;

    /**
     * @var string
     *
     * @ORM\Column(name="Spanish", type="string", length=255, nullable=false)
     */
    private $spanish;

    /**
     * @var string
     *
     * @ORM\Column(name="Czech", type="string", length=255, nullable=false)
     */
    private $czech;

    /**
     * @var string
     *
     * @ORM\Column(name="Hungarian", type="string", length=255, nullable=false)
     */
    private $hungarian;

    /**
     * @var string
     *
     * @ORM\Column(name="Polish", type="string", length=255, nullable=false)
     */
    private $polish;


}
