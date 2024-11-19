<?php

namespace Recranet\OTA\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType;

/**
 * Class representing AcceptablePaymentCardAType
 */
class AcceptablePaymentCardAType
{
    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Currency decimal places.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @var int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * A code used to identify this payment card. Refer to OpenTravel Code List Card Type (CDT).
     *
     * @var string $cardType
     */
    private $cardType = null;

    /**
     * The name used to describe this type of payment card, for example, American Express.
     *
     * @var string $cardName
     */
    private $cardName = null;

    /**
     * If applicable, defines the percentage of the total amount that is incurred as a usage fee.
     *
     * @var float $usagePercentage
     */
    private $usagePercentage = null;

    /**
     * If applicable, defines the additonal amount that is incurred as a usage fee.
     *
     * @var float $usageAmount
     */
    private $usageAmount = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Currency decimal places.
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
     * Currency decimal places.
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
     * Gets as cardType
     *
     * A code used to identify this payment card. Refer to OpenTravel Code List Card Type (CDT).
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Sets a new cardType
     *
     * A code used to identify this payment card. Refer to OpenTravel Code List Card Type (CDT).
     *
     * @param string $cardType
     * @return self
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
        return $this;
    }

    /**
     * Gets as cardName
     *
     * The name used to describe this type of payment card, for example, American Express.
     *
     * @return string
     */
    public function getCardName()
    {
        return $this->cardName;
    }

    /**
     * Sets a new cardName
     *
     * The name used to describe this type of payment card, for example, American Express.
     *
     * @param string $cardName
     * @return self
     */
    public function setCardName($cardName)
    {
        $this->cardName = $cardName;
        return $this;
    }

    /**
     * Gets as usagePercentage
     *
     * If applicable, defines the percentage of the total amount that is incurred as a usage fee.
     *
     * @return float
     */
    public function getUsagePercentage()
    {
        return $this->usagePercentage;
    }

    /**
     * Sets a new usagePercentage
     *
     * If applicable, defines the percentage of the total amount that is incurred as a usage fee.
     *
     * @param float $usagePercentage
     * @return self
     */
    public function setUsagePercentage($usagePercentage)
    {
        $this->usagePercentage = $usagePercentage;
        return $this;
    }

    /**
     * Gets as usageAmount
     *
     * If applicable, defines the additonal amount that is incurred as a usage fee.
     *
     * @return float
     */
    public function getUsageAmount()
    {
        return $this->usageAmount;
    }

    /**
     * Sets a new usageAmount
     *
     * If applicable, defines the additonal amount that is incurred as a usage fee.
     *
     * @param float $usageAmount
     * @return self
     */
    public function setUsageAmount($usageAmount)
    {
        $this->usageAmount = $usageAmount;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

