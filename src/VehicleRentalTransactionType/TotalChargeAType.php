<?php

namespace Recranet\OTA\VehicleRentalTransactionType;

/**
 * Class representing TotalChargeAType
 */
class TotalChargeAType
{
    /**
     * Total rental charges excluding any additional mandatory charges.
     *
     * @var float $rateTotalAmount
     */
    private $rateTotalAmount = null;

    /**
     * Total rental charges including any additional mandatory charges (e.g., taxes).
     *
     * @var float $estimatedTotalAmount
     */
    private $estimatedTotalAmount = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @var int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Gets as rateTotalAmount
     *
     * Total rental charges excluding any additional mandatory charges.
     *
     * @return float
     */
    public function getRateTotalAmount()
    {
        return $this->rateTotalAmount;
    }

    /**
     * Sets a new rateTotalAmount
     *
     * Total rental charges excluding any additional mandatory charges.
     *
     * @param float $rateTotalAmount
     * @return self
     */
    public function setRateTotalAmount($rateTotalAmount)
    {
        $this->rateTotalAmount = $rateTotalAmount;
        return $this;
    }

    /**
     * Gets as estimatedTotalAmount
     *
     * Total rental charges including any additional mandatory charges (e.g., taxes).
     *
     * @return float
     */
    public function getEstimatedTotalAmount()
    {
        return $this->estimatedTotalAmount;
    }

    /**
     * Sets a new estimatedTotalAmount
     *
     * Total rental charges including any additional mandatory charges (e.g., taxes).
     *
     * @param float $estimatedTotalAmount
     * @return self
     */
    public function setEstimatedTotalAmount($estimatedTotalAmount)
    {
        $this->estimatedTotalAmount = $estimatedTotalAmount;
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
     * The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
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
     * The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
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

