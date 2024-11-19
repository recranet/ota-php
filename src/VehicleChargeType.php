<?php

namespace Recranet\OTA;

/**
 * Class representing VehicleChargeType
 *
 * Identifies specific charges.
 * XSD Type: VehicleChargeType
 */
class VehicleChargeType
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
     * If TRUE, taxes are included in this charge.
     *
     * @var bool $taxInclusive
     */
    private $taxInclusive = null;

    /**
     * A description of the charge.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * If TRUE, a guarantee payment or hold is required.
     *
     * @var bool $guaranteedInd
     */
    private $guaranteedInd = null;

    /**
     * An indication if this amount is included in the base vehicle rate, or is an additonal cost.
     *
     *  false
     *
     * @var bool $includedInRate
     */
    private $includedInRate = null;

    /**
     * When true, indicates the item's charges are included in the estimated total amount (in TotalCharge) and when false, the item is not included in the estimated total amount.
     *
     * @var bool $includedInEstTotalInd
     */
    private $includedInEstTotalInd = null;

    /**
     * When true, the rate has been converted to a different currency.
     *
     * @var bool $rateConvertInd
     */
    private $rateConvertInd = null;

    /**
     * A collection of one or more taxes associated with a specific charge.
     *
     * @var \Recranet\OTA\VehicleChargeType\TaxAmountsAType\TaxAmountAType[] $taxAmounts
     */
    private $taxAmounts = null;

    /**
     * Information on any minimum or maximum amounts, if appropriate.
     *
     * @var \Recranet\OTA\VehicleChargeType\MinMaxAType $minMax
     */
    private $minMax = null;

    /**
     * Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
     *
     * @var \Recranet\OTA\VehicleChargeType\CalculationAType[] $calculation
     */
    private $calculation = [
        
    ];

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
     * Gets as taxInclusive
     *
     * If TRUE, taxes are included in this charge.
     *
     * @return bool
     */
    public function getTaxInclusive()
    {
        return $this->taxInclusive;
    }

    /**
     * Sets a new taxInclusive
     *
     * If TRUE, taxes are included in this charge.
     *
     * @param bool $taxInclusive
     * @return self
     */
    public function setTaxInclusive($taxInclusive)
    {
        $this->taxInclusive = $taxInclusive;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the charge.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the charge.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as guaranteedInd
     *
     * If TRUE, a guarantee payment or hold is required.
     *
     * @return bool
     */
    public function getGuaranteedInd()
    {
        return $this->guaranteedInd;
    }

    /**
     * Sets a new guaranteedInd
     *
     * If TRUE, a guarantee payment or hold is required.
     *
     * @param bool $guaranteedInd
     * @return self
     */
    public function setGuaranteedInd($guaranteedInd)
    {
        $this->guaranteedInd = $guaranteedInd;
        return $this;
    }

    /**
     * Gets as includedInRate
     *
     * An indication if this amount is included in the base vehicle rate, or is an additonal cost.
     *
     *  false
     *
     * @return bool
     */
    public function getIncludedInRate()
    {
        return $this->includedInRate;
    }

    /**
     * Sets a new includedInRate
     *
     * An indication if this amount is included in the base vehicle rate, or is an additonal cost.
     *
     *  false
     *
     * @param bool $includedInRate
     * @return self
     */
    public function setIncludedInRate($includedInRate)
    {
        $this->includedInRate = $includedInRate;
        return $this;
    }

    /**
     * Gets as includedInEstTotalInd
     *
     * When true, indicates the item's charges are included in the estimated total amount (in TotalCharge) and when false, the item is not included in the estimated total amount.
     *
     * @return bool
     */
    public function getIncludedInEstTotalInd()
    {
        return $this->includedInEstTotalInd;
    }

    /**
     * Sets a new includedInEstTotalInd
     *
     * When true, indicates the item's charges are included in the estimated total amount (in TotalCharge) and when false, the item is not included in the estimated total amount.
     *
     * @param bool $includedInEstTotalInd
     * @return self
     */
    public function setIncludedInEstTotalInd($includedInEstTotalInd)
    {
        $this->includedInEstTotalInd = $includedInEstTotalInd;
        return $this;
    }

    /**
     * Gets as rateConvertInd
     *
     * When true, the rate has been converted to a different currency.
     *
     * @return bool
     */
    public function getRateConvertInd()
    {
        return $this->rateConvertInd;
    }

    /**
     * Sets a new rateConvertInd
     *
     * When true, the rate has been converted to a different currency.
     *
     * @param bool $rateConvertInd
     * @return self
     */
    public function setRateConvertInd($rateConvertInd)
    {
        $this->rateConvertInd = $rateConvertInd;
        return $this;
    }

    /**
     * Adds as taxAmount
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @return self
     * @param \Recranet\OTA\VehicleChargeType\TaxAmountsAType\TaxAmountAType $taxAmount
     */
    public function addToTaxAmounts(\Recranet\OTA\VehicleChargeType\TaxAmountsAType\TaxAmountAType $taxAmount)
    {
        $this->taxAmounts[] = $taxAmount;
        return $this;
    }

    /**
     * isset taxAmounts
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxAmounts($index)
    {
        return isset($this->taxAmounts[$index]);
    }

    /**
     * unset taxAmounts
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxAmounts($index)
    {
        unset($this->taxAmounts[$index]);
    }

    /**
     * Gets as taxAmounts
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @return \Recranet\OTA\VehicleChargeType\TaxAmountsAType\TaxAmountAType[]
     */
    public function getTaxAmounts()
    {
        return $this->taxAmounts;
    }

    /**
     * Sets a new taxAmounts
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @param \Recranet\OTA\VehicleChargeType\TaxAmountsAType\TaxAmountAType[] $taxAmounts
     * @return self
     */
    public function setTaxAmounts(array $taxAmounts = null)
    {
        $this->taxAmounts = $taxAmounts;
        return $this;
    }

    /**
     * Gets as minMax
     *
     * Information on any minimum or maximum amounts, if appropriate.
     *
     * @return \Recranet\OTA\VehicleChargeType\MinMaxAType
     */
    public function getMinMax()
    {
        return $this->minMax;
    }

    /**
     * Sets a new minMax
     *
     * Information on any minimum or maximum amounts, if appropriate.
     *
     * @param \Recranet\OTA\VehicleChargeType\MinMaxAType $minMax
     * @return self
     */
    public function setMinMax(?\Recranet\OTA\VehicleChargeType\MinMaxAType $minMax = null)
    {
        $this->minMax = $minMax;
        return $this;
    }

    /**
     * Adds as calculation
     *
     * Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
     *
     * @return self
     * @param \Recranet\OTA\VehicleChargeType\CalculationAType $calculation
     */
    public function addToCalculation(\Recranet\OTA\VehicleChargeType\CalculationAType $calculation)
    {
        $this->calculation[] = $calculation;
        return $this;
    }

    /**
     * isset calculation
     *
     * Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCalculation($index)
    {
        return isset($this->calculation[$index]);
    }

    /**
     * unset calculation
     *
     * Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCalculation($index)
    {
        unset($this->calculation[$index]);
    }

    /**
     * Gets as calculation
     *
     * Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
     *
     * @return \Recranet\OTA\VehicleChargeType\CalculationAType[]
     */
    public function getCalculation()
    {
        return $this->calculation;
    }

    /**
     * Sets a new calculation
     *
     * Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
     *
     * @param \Recranet\OTA\VehicleChargeType\CalculationAType[] $calculation
     * @return self
     */
    public function setCalculation(array $calculation = null)
    {
        $this->calculation = $calculation;
        return $this;
    }
}

