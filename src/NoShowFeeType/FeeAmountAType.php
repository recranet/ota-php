<?php

namespace Recranet\OTA\NoShowFeeType;

/**
 * Class representing FeeAmountAType
 */
class FeeAmountAType
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
     * When true indicates the amount was converted from another currency.
     *
     * @var bool $rateConvertedInd
     */
    private $rateConvertedInd = null;

    /**
     * When true, a credit card is required when a reservation is booked or modified.
     *
     * @var bool $guaranteeReqInd
     */
    private $guaranteeReqInd = null;

    /**
     * When true, an email address is required when a reservation is booked or modified.
     *
     * @var bool $emailRequiredInd
     */
    private $emailRequiredInd = null;

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
     * Gets as rateConvertedInd
     *
     * When true indicates the amount was converted from another currency.
     *
     * @return bool
     */
    public function getRateConvertedInd()
    {
        return $this->rateConvertedInd;
    }

    /**
     * Sets a new rateConvertedInd
     *
     * When true indicates the amount was converted from another currency.
     *
     * @param bool $rateConvertedInd
     * @return self
     */
    public function setRateConvertedInd($rateConvertedInd)
    {
        $this->rateConvertedInd = $rateConvertedInd;
        return $this;
    }

    /**
     * Gets as guaranteeReqInd
     *
     * When true, a credit card is required when a reservation is booked or modified.
     *
     * @return bool
     */
    public function getGuaranteeReqInd()
    {
        return $this->guaranteeReqInd;
    }

    /**
     * Sets a new guaranteeReqInd
     *
     * When true, a credit card is required when a reservation is booked or modified.
     *
     * @param bool $guaranteeReqInd
     * @return self
     */
    public function setGuaranteeReqInd($guaranteeReqInd)
    {
        $this->guaranteeReqInd = $guaranteeReqInd;
        return $this;
    }

    /**
     * Gets as emailRequiredInd
     *
     * When true, an email address is required when a reservation is booked or modified.
     *
     * @return bool
     */
    public function getEmailRequiredInd()
    {
        return $this->emailRequiredInd;
    }

    /**
     * Sets a new emailRequiredInd
     *
     * When true, an email address is required when a reservation is booked or modified.
     *
     * @param bool $emailRequiredInd
     * @return self
     */
    public function setEmailRequiredInd($emailRequiredInd)
    {
        $this->emailRequiredInd = $emailRequiredInd;
        return $this;
    }
}

