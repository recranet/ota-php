<?php

namespace Recranet\OTA\Type\EMDType;

/**
 * Class representing EquivFareAType
 */
class EquivFareAType
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
     * Used to specify if just equivalent fare paid or paid net or paid sell.
     *
     * @var string $purpose
     */
    private $purpose = null;

    /**
     * Used to specify if ticket fare is bulk ticket, inclusive tour, or no additional charge.
     *
     * @var string $fareAmountType
     */
    private $fareAmountType = null;

    /**
     * Banker's buying rate used to convert the base amount into the equivalent amount paid.
     *
     * @var float $bankExchangeRate
     */
    private $bankExchangeRate = null;

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
     * Gets as purpose
     *
     * Used to specify if just equivalent fare paid or paid net or paid sell.
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * Used to specify if just equivalent fare paid or paid net or paid sell.
     *
     * @param string $purpose
     * @return self
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as fareAmountType
     *
     * Used to specify if ticket fare is bulk ticket, inclusive tour, or no additional charge.
     *
     * @return string
     */
    public function getFareAmountType()
    {
        return $this->fareAmountType;
    }

    /**
     * Sets a new fareAmountType
     *
     * Used to specify if ticket fare is bulk ticket, inclusive tour, or no additional charge.
     *
     * @param string $fareAmountType
     * @return self
     */
    public function setFareAmountType($fareAmountType)
    {
        $this->fareAmountType = $fareAmountType;
        return $this;
    }

    /**
     * Gets as bankExchangeRate
     *
     * Banker's buying rate used to convert the base amount into the equivalent amount paid.
     *
     * @return float
     */
    public function getBankExchangeRate()
    {
        return $this->bankExchangeRate;
    }

    /**
     * Sets a new bankExchangeRate
     *
     * Banker's buying rate used to convert the base amount into the equivalent amount paid.
     *
     * @param float $bankExchangeRate
     * @return self
     */
    public function setBankExchangeRate($bankExchangeRate)
    {
        $this->bankExchangeRate = $bankExchangeRate;
        return $this;
    }
}

