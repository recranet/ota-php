<?php

namespace Recranet\OTA\Type\AvailStatusMessageType;

/**
 * Class representing DeltaAType
 */
class DeltaAType
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
     * Upper limit on the number of Deltas that should be added to the Rate Hurdle for each transient reservation.
     *
     * @var int $ceiling
     */
    private $ceiling = null;

    /**
     * Upper limit on the number of transient reservations that should be accepted.
     *
     * @var int $maxSold
     */
    private $maxSold = null;

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
     * Gets as ceiling
     *
     * Upper limit on the number of Deltas that should be added to the Rate Hurdle for each transient reservation.
     *
     * @return int
     */
    public function getCeiling()
    {
        return $this->ceiling;
    }

    /**
     * Sets a new ceiling
     *
     * Upper limit on the number of Deltas that should be added to the Rate Hurdle for each transient reservation.
     *
     * @param int $ceiling
     * @return self
     */
    public function setCeiling($ceiling)
    {
        $this->ceiling = $ceiling;
        return $this;
    }

    /**
     * Gets as maxSold
     *
     * Upper limit on the number of transient reservations that should be accepted.
     *
     * @return int
     */
    public function getMaxSold()
    {
        return $this->maxSold;
    }

    /**
     * Sets a new maxSold
     *
     * Upper limit on the number of transient reservations that should be accepted.
     *
     * @param int $maxSold
     * @return self
     */
    public function setMaxSold($maxSold)
    {
        $this->maxSold = $maxSold;
        return $this;
    }
}

