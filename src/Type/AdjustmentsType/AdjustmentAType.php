<?php

namespace Recranet\OTA\Type\AdjustmentsType;

/**
 * Class representing AdjustmentAType
 */
class AdjustmentAType
{
    /**
     * @var string $reservationOriginatorCode
     */
    private $reservationOriginatorCode = null;

    /**
     * The confirmation ID number.
     *
     * @var string $confirmationID
     */
    private $confirmationID = null;

    /**
     * The reservation ID number.
     *
     * @var string $reservationID
     */
    private $reservationID = null;

    /**
     * @var string $roomInventoryCode
     */
    private $roomInventoryCode = null;

    /**
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
     *
     * @var string $promotionCode
     */
    private $promotionCode = null;

    /**
     * List of the vendor codes associated with a promotion.
     *
     * @var string[] $promotionVendorCode
     */
    private $promotionVendorCode = null;

    /**
     * @var string $adjustReason
     */
    private $adjustReason = null;

    /**
     * @var int $sequence
     */
    private $sequence = null;

    /**
     * @var int $invValue
     */
    private $invValue = null;

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
     * Gets as reservationOriginatorCode
     *
     * @return string
     */
    public function getReservationOriginatorCode()
    {
        return $this->reservationOriginatorCode;
    }

    /**
     * Sets a new reservationOriginatorCode
     *
     * @param string $reservationOriginatorCode
     * @return self
     */
    public function setReservationOriginatorCode($reservationOriginatorCode)
    {
        $this->reservationOriginatorCode = $reservationOriginatorCode;
        return $this;
    }

    /**
     * Gets as confirmationID
     *
     * The confirmation ID number.
     *
     * @return string
     */
    public function getConfirmationID()
    {
        return $this->confirmationID;
    }

    /**
     * Sets a new confirmationID
     *
     * The confirmation ID number.
     *
     * @param string $confirmationID
     * @return self
     */
    public function setConfirmationID($confirmationID)
    {
        $this->confirmationID = $confirmationID;
        return $this;
    }

    /**
     * Gets as reservationID
     *
     * The reservation ID number.
     *
     * @return string
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * The reservation ID number.
     *
     * @param string $reservationID
     * @return self
     */
    public function setReservationID($reservationID)
    {
        $this->reservationID = $reservationID;
        return $this;
    }

    /**
     * Gets as roomInventoryCode
     *
     * @return string
     */
    public function getRoomInventoryCode()
    {
        return $this->roomInventoryCode;
    }

    /**
     * Sets a new roomInventoryCode
     *
     * @param string $roomInventoryCode
     * @return self
     */
    public function setRoomInventoryCode($roomInventoryCode)
    {
        $this->roomInventoryCode = $roomInventoryCode;
        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;
        return $this;
    }

    /**
     * Adds as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return self
     * @param string $promotionVendorCode
     */
    public function addToPromotionVendorCode($promotionVendorCode)
    {
        $this->promotionVendorCode[] = $promotionVendorCode;
        return $this;
    }

    /**
     * isset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionVendorCode($index)
    {
        return isset($this->promotionVendorCode[$index]);
    }

    /**
     * unset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionVendorCode($index)
    {
        unset($this->promotionVendorCode[$index]);
    }

    /**
     * Gets as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return string[]
     */
    public function getPromotionVendorCode()
    {
        return $this->promotionVendorCode;
    }

    /**
     * Sets a new promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param string $promotionVendorCode
     * @return self
     */
    public function setPromotionVendorCode(array $promotionVendorCode)
    {
        $this->promotionVendorCode = $promotionVendorCode;
        return $this;
    }

    /**
     * Gets as adjustReason
     *
     * @return string
     */
    public function getAdjustReason()
    {
        return $this->adjustReason;
    }

    /**
     * Sets a new adjustReason
     *
     * @param string $adjustReason
     * @return self
     */
    public function setAdjustReason($adjustReason)
    {
        $this->adjustReason = $adjustReason;
        return $this;
    }

    /**
     * Gets as sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * @param int $sequence
     * @return self
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as invValue
     *
     * @return int
     */
    public function getInvValue()
    {
        return $this->invValue;
    }

    /**
     * Sets a new invValue
     *
     * @param int $invValue
     * @return self
     */
    public function setInvValue($invValue)
    {
        $this->invValue = $invValue;
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
}

