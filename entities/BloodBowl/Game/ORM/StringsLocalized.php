<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * StringsLocalized
 *
 * @ORM\Table(name="Strings_Localized")
 * @ORM\Entity
 */
class StringsLocalized
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
     * @ORM\Column(name="French", type="string", length=255, nullable=true)
     */
    private $french;

    /**
     * @var string
     *
     * @ORM\Column(name="English", type="string", length=255, nullable=true)
     */
    private $english;

    /**
     * @var string
     *
     * @ORM\Column(name="Italian", type="string", length=255, nullable=true)
     */
    private $italian;

    /**
     * @var string
     *
     * @ORM\Column(name="German", type="string", length=255, nullable=true)
     */
    private $german;

    /**
     * @var string
     *
     * @ORM\Column(name="Russian", type="string", length=255, nullable=true)
     */
    private $russian;

    /**
     * @var string
     *
     * @ORM\Column(name="Spanish", type="string", length=255, nullable=true)
     */
    private $spanish;

    /**
     * @var string
     *
     * @ORM\Column(name="Czech", type="string", length=255, nullable=true)
     */
    private $czech;

    /**
     * @var string
     *
     * @ORM\Column(name="Hungarian", type="string", length=255, nullable=true)
     */
    private $hungarian;

    /**
     * @var string
     *
     * @ORM\Column(name="Polish", type="string", length=255, nullable=true)
     */
    private $polish;


}
