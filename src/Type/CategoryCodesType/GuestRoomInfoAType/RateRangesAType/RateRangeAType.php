<?php

namespace Recranet\OTA\Type\CategoryCodesType\GuestRoomInfoAType\RateRangesAType;

/**
 * Class representing RateRangeAType
 */
class RateRangeAType
{
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
     * A decimal value that indicates the minimum monetary value to be considered in a request for an available product.
     *
     * @var float $minRate
     */
    private $minRate = null;

    /**
     * A decimal value that indicates the maximum monetary value to be considered in a request for an available product.
     *
     * @var float $maxRate
     */
    private $maxRate = null;

    /**
     * The rate amount used in place of MinRate and MaxRate when a specific rate is being requested.
     *
     * @var float $fixedRate
     */
    private $fixedRate = null;

    /**
     * Used to specify the period of time to which the rates apply.
     *
     * @var string $rateTimeUnit
     */
    private $rateTimeUnit = null;

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
     * Gets as minRate
     *
     * A decimal value that indicates the minimum monetary value to be considered in a request for an available product.
     *
     * @return float
     */
    public function getMinRate()
    {
        return $this->minRate;
    }

    /**
     * Sets a new minRate
     *
     * A decimal value that indicates the minimum monetary value to be considered in a request for an available product.
     *
     * @param float $minRate
     * @return self
     */
    public function setMinRate($minRate)
    {
        $this->minRate = $minRate;
        return $this;
    }

    /**
     * Gets as maxRate
     *
     * A decimal value that indicates the maximum monetary value to be considered in a request for an available product.
     *
     * @return float
     */
    public function getMaxRate()
    {
        return $this->maxRate;
    }

    /**
     * Sets a new maxRate
     *
     * A decimal value that indicates the maximum monetary value to be considered in a request for an available product.
     *
     * @param float $maxRate
     * @return self
     */
    public function setMaxRate($maxRate)
    {
        $this->maxRate = $maxRate;
        return $this;
    }

    /**
     * Gets as fixedRate
     *
     * The rate amount used in place of MinRate and MaxRate when a specific rate is being requested.
     *
     * @return float
     */
    public function getFixedRate()
    {
        return $this->fixedRate;
    }

    /**
     * Sets a new fixedRate
     *
     * The rate amount used in place of MinRate and MaxRate when a specific rate is being requested.
     *
     * @param float $fixedRate
     * @return self
     */
    public function setFixedRate($fixedRate)
    {
        $this->fixedRate = $fixedRate;
        return $this;
    }

    /**
     * Gets as rateTimeUnit
     *
     * Used to specify the period of time to which the rates apply.
     *
     * @return string
     */
    public function getRateTimeUnit()
    {
        return $this->rateTimeUnit;
    }

    /**
     * Sets a new rateTimeUnit
     *
     * Used to specify the period of time to which the rates apply.
     *
     * @param string $rateTimeUnit
     * @return self
     */
    public function setRateTimeUnit($rateTimeUnit)
    {
        $this->rateTimeUnit = $rateTimeUnit;
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
}

