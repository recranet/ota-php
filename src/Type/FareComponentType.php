<?php

namespace Recranet\OTA\Type;

/**
 * Class representing FareComponentType
 *
 * Information representing sold data supporting the fare construction applicable to each fare component in a transaction.
 * XSD Type: FareComponentType
 */
class FareComponentType
{
    /**
     * The date on which the fare was calculated and quoted.
     *
     * @var \DateTime $priceQuoteDate
     */
    private $priceQuoteDate = null;

    /**
     * A qualifier for pricing to select fares.
     *
     * @var string $accountCode
     */
    private $accountCode = null;

    /**
     * A qualifier for pricing to select fares.
     *
     * @var string $pricingDesignator
     */
    private $pricingDesignator = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * A published value used to convert a NUC amount to the currency of commencement of travel.
     *
     * @var float $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Priceable unit number.
     *
     * @var \Recranet\OTA\Type\FareComponentType\PriceableUnitAType[] $priceableUnit
     */
    private $priceableUnit = [
        
    ];

    /**
     * The total base, total net, or total sell construction amount.
     *
     * @var \Recranet\OTA\Type\FareComponentType\TotalConstructionAmountAType[] $totalConstructionAmount
     */
    private $totalConstructionAmount = [
        
    ];

    /**
     * Gets as priceQuoteDate
     *
     * The date on which the fare was calculated and quoted.
     *
     * @return \DateTime
     */
    public function getPriceQuoteDate()
    {
        return $this->priceQuoteDate;
    }

    /**
     * Sets a new priceQuoteDate
     *
     * The date on which the fare was calculated and quoted.
     *
     * @param \DateTime $priceQuoteDate
     * @return self
     */
    public function setPriceQuoteDate(\DateTime $priceQuoteDate)
    {
        $this->priceQuoteDate = $priceQuoteDate;
        return $this;
    }

    /**
     * Gets as accountCode
     *
     * A qualifier for pricing to select fares.
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->accountCode;
    }

    /**
     * Sets a new accountCode
     *
     * A qualifier for pricing to select fares.
     *
     * @param string $accountCode
     * @return self
     */
    public function setAccountCode($accountCode)
    {
        $this->accountCode = $accountCode;
        return $this;
    }

    /**
     * Gets as pricingDesignator
     *
     * A qualifier for pricing to select fares.
     *
     * @return string
     */
    public function getPricingDesignator()
    {
        return $this->pricingDesignator;
    }

    /**
     * Sets a new pricingDesignator
     *
     * A qualifier for pricing to select fares.
     *
     * @param string $pricingDesignator
     * @return self
     */
    public function setPricingDesignator($pricingDesignator)
    {
        $this->pricingDesignator = $pricingDesignator;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as exchangeRate
     *
     * A published value used to convert a NUC amount to the currency of commencement of travel.
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * A published value used to convert a NUC amount to the currency of commencement of travel.
     *
     * @param float $exchangeRate
     * @return self
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Adds as priceableUnit
     *
     * Priceable unit number.
     *
     * @return self
     * @param \Recranet\OTA\Type\FareComponentType\PriceableUnitAType $priceableUnit
     */
    public function addToPriceableUnit(\Recranet\OTA\Type\FareComponentType\PriceableUnitAType $priceableUnit)
    {
        $this->priceableUnit[] = $priceableUnit;
        return $this;
    }

    /**
     * isset priceableUnit
     *
     * Priceable unit number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceableUnit($index)
    {
        return isset($this->priceableUnit[$index]);
    }

    /**
     * unset priceableUnit
     *
     * Priceable unit number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceableUnit($index)
    {
        unset($this->priceableUnit[$index]);
    }

    /**
     * Gets as priceableUnit
     *
     * Priceable unit number.
     *
     * @return \Recranet\OTA\Type\FareComponentType\PriceableUnitAType[]
     */
    public function getPriceableUnit()
    {
        return $this->priceableUnit;
    }

    /**
     * Sets a new priceableUnit
     *
     * Priceable unit number.
     *
     * @param \Recranet\OTA\Type\FareComponentType\PriceableUnitAType[] $priceableUnit
     * @return self
     */
    public function setPriceableUnit(array $priceableUnit)
    {
        $this->priceableUnit = $priceableUnit;
        return $this;
    }

    /**
     * Adds as totalConstructionAmount
     *
     * The total base, total net, or total sell construction amount.
     *
     * @return self
     * @param \Recranet\OTA\Type\FareComponentType\TotalConstructionAmountAType $totalConstructionAmount
     */
    public function addToTotalConstructionAmount(\Recranet\OTA\Type\FareComponentType\TotalConstructionAmountAType $totalConstructionAmount)
    {
        $this->totalConstructionAmount[] = $totalConstructionAmount;
        return $this;
    }

    /**
     * isset totalConstructionAmount
     *
     * The total base, total net, or total sell construction amount.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalConstructionAmount($index)
    {
        return isset($this->totalConstructionAmount[$index]);
    }

    /**
     * unset totalConstructionAmount
     *
     * The total base, total net, or total sell construction amount.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalConstructionAmount($index)
    {
        unset($this->totalConstructionAmount[$index]);
    }

    /**
     * Gets as totalConstructionAmount
     *
     * The total base, total net, or total sell construction amount.
     *
     * @return \Recranet\OTA\Type\FareComponentType\TotalConstructionAmountAType[]
     */
    public function getTotalConstructionAmount()
    {
        return $this->totalConstructionAmount;
    }

    /**
     * Sets a new totalConstructionAmount
     *
     * The total base, total net, or total sell construction amount.
     *
     * @param \Recranet\OTA\Type\FareComponentType\TotalConstructionAmountAType[] $totalConstructionAmount
     * @return self
     */
    public function setTotalConstructionAmount(array $totalConstructionAmount)
    {
        $this->totalConstructionAmount = $totalConstructionAmount;
        return $this;
    }
}

