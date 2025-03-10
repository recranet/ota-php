<?php

namespace Recranet\OTA\Type\AuthorizationType;

/**
 * Class representing AccountAuthorizationAType
 */
class AccountAuthorizationAType
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
     * Specifying the currency used in the authorization, when it isn't a ISO 4217, three alpha code (e.g., points, miles).
     *
     * @var string $nonISOCurrencyCode
     */
    private $nonISOCurrencyCode = null;

    /**
     * Information about the account.
     *
     * @var \Recranet\OTA\Type\AuthorizationType\AccountAuthorizationAType\AccountInfoAType $accountInfo
     */
    private $accountInfo = null;

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
     * Gets as nonISOCurrencyCode
     *
     * Specifying the currency used in the authorization, when it isn't a ISO 4217, three alpha code (e.g., points, miles).
     *
     * @return string
     */
    public function getNonISOCurrencyCode()
    {
        return $this->nonISOCurrencyCode;
    }

    /**
     * Sets a new nonISOCurrencyCode
     *
     * Specifying the currency used in the authorization, when it isn't a ISO 4217, three alpha code (e.g., points, miles).
     *
     * @param string $nonISOCurrencyCode
     * @return self
     */
    public function setNonISOCurrencyCode($nonISOCurrencyCode)
    {
        $this->nonISOCurrencyCode = $nonISOCurrencyCode;
        return $this;
    }

    /**
     * Gets as accountInfo
     *
     * Information about the account.
     *
     * @return \Recranet\OTA\Type\AuthorizationType\AccountAuthorizationAType\AccountInfoAType
     */
    public function getAccountInfo()
    {
        return $this->accountInfo;
    }

    /**
     * Sets a new accountInfo
     *
     * Information about the account.
     *
     * @param \Recranet\OTA\Type\AuthorizationType\AccountAuthorizationAType\AccountInfoAType $accountInfo
     * @return self
     */
    public function setAccountInfo(?\Recranet\OTA\Type\AuthorizationType\AccountAuthorizationAType\AccountInfoAType $accountInfo = null)
    {
        $this->accountInfo = $accountInfo;
        return $this;
    }
}

