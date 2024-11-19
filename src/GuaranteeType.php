<?php

namespace Recranet\OTA;

/**
 * Class representing GuaranteeType
 *
 * The guarantee information to hold a reservation
 * XSD Type: GuaranteeType
 */
class GuaranteeType
{
    /**
     * An enumerated type defining the type of action taken when the deadline has been exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @var string $retributionType
     */
    private $retributionType = null;

    /**
     * Guarantee Code
     *
     * @var string $guaranteeCode
     */
    private $guaranteeCode = null;

    /**
     * An enumerated type defining the guarantee to be applied to this reservation.
     *
     * @var string $guaranteeType
     */
    private $guaranteeType = null;

    /**
     * The room will held up until this time without a guarantee.
     *
     * @var \DateTime $holdTime
     */
    private $holdTime = null;

    /**
     * @var \Recranet\OTA\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[] $guaranteesAccepted
     */
    private $guaranteesAccepted = null;

    /**
     * Guarantee deadline, absolute or relative.
     *
     * @var \Recranet\OTA\GuaranteeType\DeadlineAType $deadline
     */
    private $deadline = null;

    /**
     * @var \Recranet\OTA\CommentType\CommentAType[] $comments
     */
    private $comments = null;

    /**
     * Text description of the Guarantee in a given language.
     *
     * @var \Recranet\OTA\ParagraphType[] $guaranteeDescription
     */
    private $guaranteeDescription = [
        
    ];

    /**
     * Gets as retributionType
     *
     * An enumerated type defining the type of action taken when the deadline has been exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @return string
     */
    public function getRetributionType()
    {
        return $this->retributionType;
    }

    /**
     * Sets a new retributionType
     *
     * An enumerated type defining the type of action taken when the deadline has been exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @param string $retributionType
     * @return self
     */
    public function setRetributionType($retributionType)
    {
        $this->retributionType = $retributionType;
        return $this;
    }

    /**
     * Gets as guaranteeCode
     *
     * Guarantee Code
     *
     * @return string
     */
    public function getGuaranteeCode()
    {
        return $this->guaranteeCode;
    }

    /**
     * Sets a new guaranteeCode
     *
     * Guarantee Code
     *
     * @param string $guaranteeCode
     * @return self
     */
    public function setGuaranteeCode($guaranteeCode)
    {
        $this->guaranteeCode = $guaranteeCode;
        return $this;
    }

    /**
     * Gets as guaranteeType
     *
     * An enumerated type defining the guarantee to be applied to this reservation.
     *
     * @return string
     */
    public function getGuaranteeType()
    {
        return $this->guaranteeType;
    }

    /**
     * Sets a new guaranteeType
     *
     * An enumerated type defining the guarantee to be applied to this reservation.
     *
     * @param string $guaranteeType
     * @return self
     */
    public function setGuaranteeType($guaranteeType)
    {
        $this->guaranteeType = $guaranteeType;
        return $this;
    }

    /**
     * Gets as holdTime
     *
     * The room will held up until this time without a guarantee.
     *
     * @return \DateTime
     */
    public function getHoldTime()
    {
        return $this->holdTime;
    }

    /**
     * Sets a new holdTime
     *
     * The room will held up until this time without a guarantee.
     *
     * @param \DateTime $holdTime
     * @return self
     */
    public function setHoldTime(\DateTime $holdTime)
    {
        $this->holdTime = $holdTime;
        return $this;
    }

    /**
     * Adds as guaranteeAccepted
     *
     * @return self
     * @param \Recranet\OTA\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted
     */
    public function addToGuaranteesAccepted(\Recranet\OTA\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted)
    {
        $this->guaranteesAccepted[] = $guaranteeAccepted;
        return $this;
    }

    /**
     * isset guaranteesAccepted
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteesAccepted($index)
    {
        return isset($this->guaranteesAccepted[$index]);
    }

    /**
     * unset guaranteesAccepted
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteesAccepted($index)
    {
        unset($this->guaranteesAccepted[$index]);
    }

    /**
     * Gets as guaranteesAccepted
     *
     * @return \Recranet\OTA\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     */
    public function getGuaranteesAccepted()
    {
        return $this->guaranteesAccepted;
    }

    /**
     * Sets a new guaranteesAccepted
     *
     * @param \Recranet\OTA\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[] $guaranteesAccepted
     * @return self
     */
    public function setGuaranteesAccepted(array $guaranteesAccepted = null)
    {
        $this->guaranteesAccepted = $guaranteesAccepted;
        return $this;
    }

    /**
     * Gets as deadline
     *
     * Guarantee deadline, absolute or relative.
     *
     * @return \Recranet\OTA\GuaranteeType\DeadlineAType
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Sets a new deadline
     *
     * Guarantee deadline, absolute or relative.
     *
     * @param \Recranet\OTA\GuaranteeType\DeadlineAType $deadline
     * @return self
     */
    public function setDeadline(?\Recranet\OTA\GuaranteeType\DeadlineAType $deadline = null)
    {
        $this->deadline = $deadline;
        return $this;
    }

    /**
     * Adds as comment
     *
     * @return self
     * @param \Recranet\OTA\CommentType\CommentAType $comment
     */
    public function addToComments(\Recranet\OTA\CommentType\CommentAType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * @return \Recranet\OTA\CommentType\CommentAType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * @param \Recranet\OTA\CommentType\CommentAType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Adds as guaranteeDescription
     *
     * Text description of the Guarantee in a given language.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $guaranteeDescription
     */
    public function addToGuaranteeDescription(\Recranet\OTA\ParagraphType $guaranteeDescription)
    {
        $this->guaranteeDescription[] = $guaranteeDescription;
        return $this;
    }

    /**
     * isset guaranteeDescription
     *
     * Text description of the Guarantee in a given language.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteeDescription($index)
    {
        return isset($this->guaranteeDescription[$index]);
    }

    /**
     * unset guaranteeDescription
     *
     * Text description of the Guarantee in a given language.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteeDescription($index)
    {
        unset($this->guaranteeDescription[$index]);
    }

    /**
     * Gets as guaranteeDescription
     *
     * Text description of the Guarantee in a given language.
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getGuaranteeDescription()
    {
        return $this->guaranteeDescription;
    }

    /**
     * Sets a new guaranteeDescription
     *
     * Text description of the Guarantee in a given language.
     *
     * @param \Recranet\OTA\ParagraphType[] $guaranteeDescription
     * @return self
     */
    public function setGuaranteeDescription(array $guaranteeDescription = null)
    {
        $this->guaranteeDescription = $guaranteeDescription;
        return $this;
    }
}

