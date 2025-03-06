<?php

namespace Recranet\OTA\Type\AirPricedOfferType\PricingAType;

/**
 * Class representing PricingDetailAType
 */
class PricingDetailAType
{
    /**
     * Associated traveler.
     *
     * @var string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * A reference to a set of offer pricing.
     *
     * @var string $offerPricingRefID
     */
    private $offerPricingRefID = null;

    /**
     * The amount charged for the ancillary product that typically does NOT include taxes.
     *
     * @var float $preTaxAmount
     */
    private $preTaxAmount = null;

    /**
     * The tax amount.
     *
     * @var float $taxAmount
     */
    private $taxAmount = null;

    /**
     * The total amount charged for the ancillary product including any applicable tax(es).
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * Tax(es) that were applied to this pricing.
     *
     * @var \Recranet\OTA\Type\TaxType[] $taxInfo
     */
    private $taxInfo = [
        
    ];

    /**
     * Redemption pricing information if all or a portion of this offer may be paid using points.
     *
     * @var \Recranet\OTA\Type\AirRedemptionMilesType $redemptionPoints
     */
    private $redemptionPoints = null;

    /**
     * Gets as travelerRPH
     *
     * Associated traveler.
     *
     * @return string
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * Associated traveler.
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH($travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;
        return $this;
    }

    /**
     * Gets as offerPricingRefID
     *
     * A reference to a set of offer pricing.
     *
     * @return string
     */
    public function getOfferPricingRefID()
    {
        return $this->offerPricingRefID;
    }

    /**
     * Sets a new offerPricingRefID
     *
     * A reference to a set of offer pricing.
     *
     * @param string $offerPricingRefID
     * @return self
     */
    public function setOfferPricingRefID($offerPricingRefID)
    {
        $this->offerPricingRefID = $offerPricingRefID;
        return $this;
    }

    /**
     * Gets as preTaxAmount
     *
     * The amount charged for the ancillary product that typically does NOT include taxes.
     *
     * @return float
     */
    public function getPreTaxAmount()
    {
        return $this->preTaxAmount;
    }

    /**
     * Sets a new preTaxAmount
     *
     * The amount charged for the ancillary product that typically does NOT include taxes.
     *
     * @param float $preTaxAmount
     * @return self
     */
    public function setPreTaxAmount($preTaxAmount)
    {
        $this->preTaxAmount = $preTaxAmount;
        return $this;
    }

    /**
     * Gets as taxAmount
     *
     * The tax amount.
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * The tax amount.
     *
     * @param float $taxAmount
     * @return self
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * Gets as amount
     *
     * The total amount charged for the ancillary product including any applicable tax(es).
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
     * The total amount charged for the ancillary product including any applicable tax(es).
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
     * Adds as taxInfo
     *
     * Tax(es) that were applied to this pricing.
     *
     * @return self
     * @param \Recranet\OTA\Type\TaxType $taxInfo
     */
    public function addToTaxInfo(\Recranet\OTA\Type\TaxType $taxInfo)
    {
        $this->taxInfo[] = $taxInfo;
        return $this;
    }

    /**
     * isset taxInfo
     *
     * Tax(es) that were applied to this pricing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxInfo($index)
    {
        return isset($this->taxInfo[$index]);
    }

    /**
     * unset taxInfo
     *
     * Tax(es) that were applied to this pricing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxInfo($index)
    {
        unset($this->taxInfo[$index]);
    }

    /**
     * Gets as taxInfo
     *
     * Tax(es) that were applied to this pricing.
     *
     * @return \Recranet\OTA\Type\TaxType[]
     */
    public function getTaxInfo()
    {
        return $this->taxInfo;
    }

    /**
     * Sets a new taxInfo
     *
     * Tax(es) that were applied to this pricing.
     *
     * @param \Recranet\OTA\Type\TaxType[] $taxInfo
     * @return self
     */
    public function setTaxInfo(array $taxInfo = null)
    {
        $this->taxInfo = $taxInfo;
        return $this;
    }

    /**
     * Gets as redemptionPoints
     *
     * Redemption pricing information if all or a portion of this offer may be paid using points.
     *
     * @return \Recranet\OTA\Type\AirRedemptionMilesType
     */
    public function getRedemptionPoints()
    {
        return $this->redemptionPoints;
    }

    /**
     * Sets a new redemptionPoints
     *
     * Redemption pricing information if all or a portion of this offer may be paid using points.
     *
     * @param \Recranet\OTA\Type\AirRedemptionMilesType $redemptionPoints
     * @return self
     */
    public function setRedemptionPoints(?\Recranet\OTA\Type\AirRedemptionMilesType $redemptionPoints = null)
    {
        $this->redemptionPoints = $redemptionPoints;
        return $this;
    }
}

