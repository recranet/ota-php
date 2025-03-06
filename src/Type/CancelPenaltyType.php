<?php

namespace Recranet\OTA\Type;

/**
 * Class representing CancelPenaltyType
 *
 * The CancelPenalty class defines the cancellation policy of the hotel facility.
 * XSD Type: CancelPenaltyType
 */
class CancelPenaltyType
{
    /**
     * Confirm Class.
     *
     * @var string $confirmClassCode
     */
    private $confirmClassCode = null;

    /**
     * Policy Class.
     *
     * @var string $policyCode
     */
    private $policyCode = null;

    /**
     * Indicates that any prepayment for the reservation is non refundable, therefore a 100% penalty on the prepayment is applied, irrespective of deadline.
     *
     * @var bool $nonRefundable
     */
    private $nonRefundable = null;

    /**
     * When true, apply to Monday.
     *
     * @var bool $mon
     */
    private $mon = null;

    /**
     * When true, apply to Tuesday.
     *
     * @var bool $tue
     */
    private $tue = null;

    /**
     * When true, apply to Wednesday.
     *
     * @var bool $weds
     */
    private $weds = null;

    /**
     * When true, apply to Thursday.
     *
     * @var bool $thur
     */
    private $thur = null;

    /**
     * When true, apply to Friday.
     *
     * @var bool $fri
     */
    private $fri = null;

    /**
     * When true, apply to Saturday.
     *
     * @var bool $sat
     */
    private $sat = null;

    /**
     * When true, apply to Sunday.
     *
     * @var bool $sun
     */
    private $sun = null;

    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * A system specific room type to which this cancellation penalty applies.
     *
     * @var string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * If true, the reservation may not be cancelled once the cancellation deadline has expired.
     * Example: false
     * Note: This will typically be set to false indicating that a reservation may be cancelled.
     *
     * @var bool $noCancelInd
     */
    private $noCancelInd = null;

    /**
     * Cancellation deadline, absolute or relative.
     *
     * @var \Recranet\OTA\Type\CancelPenaltyType\DeadlineAType $deadline
     */
    private $deadline = null;

    /**
     * Cancellation fee expressed as a fixed amount, or percentage of/or room nights.
     *
     * @var \Recranet\OTA\Type\AmountPercentType $amountPercent
     */
    private $amountPercent = null;

    /**
     * Text description of the Penalty in a given language.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $penaltyDescription
     */
    private $penaltyDescription = [
        
    ];

    /**
     * Gets as confirmClassCode
     *
     * Confirm Class.
     *
     * @return string
     */
    public function getConfirmClassCode()
    {
        return $this->confirmClassCode;
    }

    /**
     * Sets a new confirmClassCode
     *
     * Confirm Class.
     *
     * @param string $confirmClassCode
     * @return self
     */
    public function setConfirmClassCode($confirmClassCode)
    {
        $this->confirmClassCode = $confirmClassCode;
        return $this;
    }

    /**
     * Gets as policyCode
     *
     * Policy Class.
     *
     * @return string
     */
    public function getPolicyCode()
    {
        return $this->policyCode;
    }

    /**
     * Sets a new policyCode
     *
     * Policy Class.
     *
     * @param string $policyCode
     * @return self
     */
    public function setPolicyCode($policyCode)
    {
        $this->policyCode = $policyCode;
        return $this;
    }

    /**
     * Gets as nonRefundable
     *
     * Indicates that any prepayment for the reservation is non refundable, therefore a 100% penalty on the prepayment is applied, irrespective of deadline.
     *
     * @return bool
     */
    public function getNonRefundable()
    {
        return $this->nonRefundable;
    }

    /**
     * Sets a new nonRefundable
     *
     * Indicates that any prepayment for the reservation is non refundable, therefore a 100% penalty on the prepayment is applied, irrespective of deadline.
     *
     * @param bool $nonRefundable
     * @return self
     */
    public function setNonRefundable($nonRefundable)
    {
        $this->nonRefundable = $nonRefundable;
        return $this;
    }

    /**
     * Gets as mon
     *
     * When true, apply to Monday.
     *
     * @return bool
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Sets a new mon
     *
     * When true, apply to Monday.
     *
     * @param bool $mon
     * @return self
     */
    public function setMon($mon)
    {
        $this->mon = $mon;
        return $this;
    }

    /**
     * Gets as tue
     *
     * When true, apply to Tuesday.
     *
     * @return bool
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * Sets a new tue
     *
     * When true, apply to Tuesday.
     *
     * @param bool $tue
     * @return self
     */
    public function setTue($tue)
    {
        $this->tue = $tue;
        return $this;
    }

    /**
     * Gets as weds
     *
     * When true, apply to Wednesday.
     *
     * @return bool
     */
    public function getWeds()
    {
        return $this->weds;
    }

    /**
     * Sets a new weds
     *
     * When true, apply to Wednesday.
     *
     * @param bool $weds
     * @return self
     */
    public function setWeds($weds)
    {
        $this->weds = $weds;
        return $this;
    }

    /**
     * Gets as thur
     *
     * When true, apply to Thursday.
     *
     * @return bool
     */
    public function getThur()
    {
        return $this->thur;
    }

    /**
     * Sets a new thur
     *
     * When true, apply to Thursday.
     *
     * @param bool $thur
     * @return self
     */
    public function setThur($thur)
    {
        $this->thur = $thur;
        return $this;
    }

    /**
     * Gets as fri
     *
     * When true, apply to Friday.
     *
     * @return bool
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * Sets a new fri
     *
     * When true, apply to Friday.
     *
     * @param bool $fri
     * @return self
     */
    public function setFri($fri)
    {
        $this->fri = $fri;
        return $this;
    }

    /**
     * Gets as sat
     *
     * When true, apply to Saturday.
     *
     * @return bool
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * Sets a new sat
     *
     * When true, apply to Saturday.
     *
     * @param bool $sat
     * @return self
     */
    public function setSat($sat)
    {
        $this->sat = $sat;
        return $this;
    }

    /**
     * Gets as sun
     *
     * When true, apply to Sunday.
     *
     * @return bool
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * Sets a new sun
     *
     * When true, apply to Sunday.
     *
     * @param bool $sun
     * @return self
     */
    public function setSun($sun)
    {
        $this->sun = $sun;
        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as roomTypeCode
     *
     * A system specific room type to which this cancellation penalty applies.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * A system specific room type to which this cancellation penalty applies.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;
        return $this;
    }

    /**
     * Gets as noCancelInd
     *
     * If true, the reservation may not be cancelled once the cancellation deadline has expired.
     * Example: false
     * Note: This will typically be set to false indicating that a reservation may be cancelled.
     *
     * @return bool
     */
    public function getNoCancelInd()
    {
        return $this->noCancelInd;
    }

    /**
     * Sets a new noCancelInd
     *
     * If true, the reservation may not be cancelled once the cancellation deadline has expired.
     * Example: false
     * Note: This will typically be set to false indicating that a reservation may be cancelled.
     *
     * @param bool $noCancelInd
     * @return self
     */
    public function setNoCancelInd($noCancelInd)
    {
        $this->noCancelInd = $noCancelInd;
        return $this;
    }

    /**
     * Gets as deadline
     *
     * Cancellation deadline, absolute or relative.
     *
     * @return \Recranet\OTA\Type\CancelPenaltyType\DeadlineAType
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Sets a new deadline
     *
     * Cancellation deadline, absolute or relative.
     *
     * @param \Recranet\OTA\Type\CancelPenaltyType\DeadlineAType $deadline
     * @return self
     */
    public function setDeadline(?\Recranet\OTA\Type\CancelPenaltyType\DeadlineAType $deadline = null)
    {
        $this->deadline = $deadline;
        return $this;
    }

    /**
     * Gets as amountPercent
     *
     * Cancellation fee expressed as a fixed amount, or percentage of/or room nights.
     *
     * @return \Recranet\OTA\Type\AmountPercentType
     */
    public function getAmountPercent()
    {
        return $this->amountPercent;
    }

    /**
     * Sets a new amountPercent
     *
     * Cancellation fee expressed as a fixed amount, or percentage of/or room nights.
     *
     * @param \Recranet\OTA\Type\AmountPercentType $amountPercent
     * @return self
     */
    public function setAmountPercent(?\Recranet\OTA\Type\AmountPercentType $amountPercent = null)
    {
        $this->amountPercent = $amountPercent;
        return $this;
    }

    /**
     * Adds as penaltyDescription
     *
     * Text description of the Penalty in a given language.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $penaltyDescription
     */
    public function addToPenaltyDescription(\Recranet\OTA\Type\ParagraphType $penaltyDescription)
    {
        $this->penaltyDescription[] = $penaltyDescription;
        return $this;
    }

    /**
     * isset penaltyDescription
     *
     * Text description of the Penalty in a given language.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPenaltyDescription($index)
    {
        return isset($this->penaltyDescription[$index]);
    }

    /**
     * unset penaltyDescription
     *
     * Text description of the Penalty in a given language.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPenaltyDescription($index)
    {
        unset($this->penaltyDescription[$index]);
    }

    /**
     * Gets as penaltyDescription
     *
     * Text description of the Penalty in a given language.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getPenaltyDescription()
    {
        return $this->penaltyDescription;
    }

    /**
     * Sets a new penaltyDescription
     *
     * Text description of the Penalty in a given language.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $penaltyDescription
     * @return self
     */
    public function setPenaltyDescription(array $penaltyDescription = null)
    {
        $this->penaltyDescription = $penaltyDescription;
        return $this;
    }
}

