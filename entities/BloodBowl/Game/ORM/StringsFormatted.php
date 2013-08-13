<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * StringsFormatted
 *
 * @ORM\Table(name="Strings_Formatted")
 * @ORM\Entity
 */
class StringsFormatted
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
     * @ORM\Column(name="Label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="French", type="text", nullable=true)
     */
    private $french;

    /**
     * @var string
     *
     * @ORM\Column(name="English", type="text", nullable=true)
     */
    private $english;

    /**
     * @var string
     *
     * @ORM\Column(name="Italian", type="text", nullable=true)
     */
    private $italian;

    /**
     * @var string
     *
     * @ORM\Column(name="German", type="text", nullable=true)
     */
    private $german;

    /**
     * @var string
     *
     * @ORM\Column(name="Russian", type="text", nullable=true)
     */
    private $russian;

    /**
     * @var string
     *
     * @ORM\Column(name="Spanish", type="text", nullable=true)
     */
    private $spanish;

    /**
     * @var string
     *
     * @ORM\Column(name="Czech", type="text", nullable=true)
     */
    private $czech;

    /**
     * @var string
     *
     * @ORM\Column(name="Hungarian", type="text", nullable=true)
     */
    private $hungarian;

    /**
     * @var string
     *
     * @ORM\Column(name="Polish", type="text", nullable=true)
     */
    private $polish;


}
