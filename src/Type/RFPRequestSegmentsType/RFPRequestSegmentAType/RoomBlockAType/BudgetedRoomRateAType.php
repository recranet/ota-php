<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType;

/**
 * Class representing BudgetedRoomRateAType
 */
class BudgetedRoomRateAType
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
     * Number of rooms requiring this rate.
     *
     * @var int $totalRoomNightQuantity
     */
    private $totalRoomNightQuantity = null;

    /**
     * Refer to OpenTravel Code list Rate Plan Type (RPT). APEX added.
     *
     * @var string $requestedRateType
     */
    private $requestedRateType = null;

    /**
     * If true, tax is included in the budget. If false, the budget does not include taxes. Apex added.
     *
     * @var bool $includesTaxInd
     */
    private $includesTaxInd = null;

    /**
     * If true, service fees are included in the budget. If false, the budget does not include service fees. Apex added
     *
     * @var bool $includesServiceFeesInd
     */
    private $includesServiceFeesInd = null;

    /**
     * If true, gratuity is included in the budget. If false, the budget does not include gratuity. Apex added
     *
     * @var bool $includesGratuityInd
     */
    private $includesGratuityInd = null;

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
     * Gets as totalRoomNightQuantity
     *
     * Number of rooms requiring this rate.
     *
     * @return int
     */
    public function getTotalRoomNightQuantity()
    {
        return $this->totalRoomNightQuantity;
    }

    /**
     * Sets a new totalRoomNightQuantity
     *
     * Number of rooms requiring this rate.
     *
     * @param int $totalRoomNightQuantity
     * @return self
     */
    public function setTotalRoomNightQuantity($totalRoomNightQuantity)
    {
        $this->totalRoomNightQuantity = $totalRoomNightQuantity;
        return $this;
    }

    /**
     * Gets as requestedRateType
     *
     * Refer to OpenTravel Code list Rate Plan Type (RPT). APEX added.
     *
     * @return string
     */
    public function getRequestedRateType()
    {
        return $this->requestedRateType;
    }

    /**
     * Sets a new requestedRateType
     *
     * Refer to OpenTravel Code list Rate Plan Type (RPT). APEX added.
     *
     * @param string $requestedRateType
     * @return self
     */
    public function setRequestedRateType($requestedRateType)
    {
        $this->requestedRateType = $requestedRateType;
        return $this;
    }

    /**
     * Gets as includesTaxInd
     *
     * If true, tax is included in the budget. If false, the budget does not include taxes. Apex added.
     *
     * @return bool
     */
    public function getIncludesTaxInd()
    {
        return $this->includesTaxInd;
    }

    /**
     * Sets a new includesTaxInd
     *
     * If true, tax is included in the budget. If false, the budget does not include taxes. Apex added.
     *
     * @param bool $includesTaxInd
     * @return self
     */
    public function setIncludesTaxInd($includesTaxInd)
    {
        $this->includesTaxInd = $includesTaxInd;
        return $this;
    }

    /**
     * Gets as includesServiceFeesInd
     *
     * If true, service fees are included in the budget. If false, the budget does not include service fees. Apex added
     *
     * @return bool
     */
    public function getIncludesServiceFeesInd()
    {
        return $this->includesServiceFeesInd;
    }

    /**
     * Sets a new includesServiceFeesInd
     *
     * If true, service fees are included in the budget. If false, the budget does not include service fees. Apex added
     *
     * @param bool $includesServiceFeesInd
     * @return self
     */
    public function setIncludesServiceFeesInd($includesServiceFeesInd)
    {
        $this->includesServiceFeesInd = $includesServiceFeesInd;
        return $this;
    }

    /**
     * Gets as includesGratuityInd
     *
     * If true, gratuity is included in the budget. If false, the budget does not include gratuity. Apex added
     *
     * @return bool
     */
    public function getIncludesGratuityInd()
    {
        return $this->includesGratuityInd;
    }

    /**
     * Sets a new includesGratuityInd
     *
     * If true, gratuity is included in the budget. If false, the budget does not include gratuity. Apex added
     *
     * @param bool $includesGratuityInd
     * @return self
     */
    public function setIncludesGratuityInd($includesGratuityInd)
    {
        $this->includesGratuityInd = $includesGratuityInd;
        return $this;
    }
}

