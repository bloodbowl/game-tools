<?php

namespace BloodBowl\Game\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * NegotiationFeedbacks
 *
 * @ORM\Table(name="Negotiation_Feedbacks")
 * @ORM\Entity
 */
class NegotiationFeedbacks
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
     * @ORM\Column(name="idNegotiation_Feedback_Types", type="integer", nullable=true)
     */
    private $idnegotiationFeedbackTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStrings_Localized", type="integer", nullable=true)
     */
    private $idstringsLocalized;


}
