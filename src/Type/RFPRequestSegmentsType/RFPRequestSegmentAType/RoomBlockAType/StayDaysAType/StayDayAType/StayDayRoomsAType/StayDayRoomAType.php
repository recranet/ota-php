<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType;

/**
 * Class representing StayDayRoomAType
 */
class StayDayRoomAType
{
    /**
     * This is where a requester specifies the room type they wish to procure (e.g. king, double, double double, accessible). This is NOT an OpenTravel Codelist due to the infinite number of possible room types.
     *
     * @var string $roomTypeRequirement
     */
    private $roomTypeRequirement = null;

    /**
     * This is the required number of rooms for a particular day for a particular room type.
     *
     * @var int $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @var int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * A monetary amount.
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * @var \Recranet\OTA\Type\ParagraphType $comment
     */
    private $comment = null;

    /**
     * Gets as roomTypeRequirement
     *
     * This is where a requester specifies the room type they wish to procure (e.g. king, double, double double, accessible). This is NOT an OpenTravel Codelist due to the infinite number of possible room types.
     *
     * @return string
     */
    public function getRoomTypeRequirement()
    {
        return $this->roomTypeRequirement;
    }

    /**
     * Sets a new roomTypeRequirement
     *
     * This is where a requester specifies the room type they wish to procure (e.g. king, double, double double, accessible). This is NOT an OpenTravel Codelist due to the infinite number of possible room types.
     *
     * @param string $roomTypeRequirement
     * @return self
     */
    public function setRoomTypeRequirement($roomTypeRequirement)
    {
        $this->roomTypeRequirement = $roomTypeRequirement;
        return $this;
    }

    /**
     * Gets as numberOfUnits
     *
     * This is the required number of rooms for a particular day for a particular room type.
     *
     * @return int
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * This is the required number of rooms for a particular day for a particular room type.
     *
     * @param int $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param int $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as comment
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param \Recranet\OTA\Type\ParagraphType $comment
     * @return self
     */
    public function setComment(?\Recranet\OTA\Type\ParagraphType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}

