<?php

namespace Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType\RatesAType;

/**
 * Class representing RateAType
 */
class RateAType
{
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
     * The different rates charged for the occupancy for the room which could be flat (a rate not variable by number of people), single, double, triple, or quad.
     *
     * @var string $occupancyRate
     */
    private $occupancyRate = null;

    /**
     * Taxes related to this room type.
     *
     * @var \Recranet\OTA\Type\TaxesType $taxes
     */
    private $taxes = null;

    /**
     * Fees associated with this room type.
     *
     * @var \Recranet\OTA\Type\FeeType[] $fees
     */
    private $fees = null;

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
     * Gets as occupancyRate
     *
     * The different rates charged for the occupancy for the room which could be flat (a rate not variable by number of people), single, double, triple, or quad.
     *
     * @return string
     */
    public function getOccupancyRate()
    {
        return $this->occupancyRate;
    }

    /**
     * Sets a new occupancyRate
     *
     * The different rates charged for the occupancy for the room which could be flat (a rate not variable by number of people), single, double, triple, or quad.
     *
     * @param string $occupancyRate
     * @return self
     */
    public function setOccupancyRate($occupancyRate)
    {
        $this->occupancyRate = $occupancyRate;
        return $this;
    }

    /**
     * Gets as taxes
     *
     * Taxes related to this room type.
     *
     * @return \Recranet\OTA\Type\TaxesType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * Taxes related to this room type.
     *
     * @param \Recranet\OTA\Type\TaxesType $taxes
     * @return self
     */
    public function setTaxes(?\Recranet\OTA\Type\TaxesType $taxes = null)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Adds as fee
     *
     * Fees associated with this room type.
     *
     * @return self
     * @param \Recranet\OTA\Type\FeeType $fee
     */
    public function addToFees(\Recranet\OTA\Type\FeeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * Fees associated with this room type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * Fees associated with this room type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * Fees associated with this room type.
     *
     * @return \Recranet\OTA\Type\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * Fees associated with this room type.
     *
     * @param \Recranet\OTA\Type\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees = null)
    {
        $this->fees = $fees;
        return $this;
    }
}

