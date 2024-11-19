<?php

namespace Recranet\OTA\AirPricedOfferType;

/**
 * Class representing PricingAType
 */
class PricingAType
{
    /**
     * The total offer quantity included in this pricing, e.g. 3 seats.
     *
     * @var int $offerQty
     */
    private $offerQty = null;

    /**
     * The total quantity of passengers accommodated.
     *
     * @var int $passengerQty
     */
    private $passengerQty = null;

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
     * Implementer: If there is no cost associated with the offer or redemption miles are being used, set this value to 0.
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * The pricing/filing currency in ISO 4217 encoding.
     * CAD = Canadian Dollar | USD = United States Dollar | EUR = Euro
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @var string $pricingCurrency
     */
    private $pricingCurrency = null;

    /**
     * The number of decimal places for the display and pricing currency(s).
     * USD 8500 with "2" Decimal Places represents $85.
     * http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/currency_codes/currency_codes_list-1.htm
     * This is equivalent to the ISO 4217 standard "minor unit" and is typically used when the amount provided includes the minor unit of currency without a decimal point.
     *
     * @var int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * The source currency code for a conversion in ISO 4217 endoding.
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @var string $fromCurrency
     */
    private $fromCurrency = null;

    /**
     * The target currency for the conversion in ISO 4217 encoding.
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @var string $toCurrency
     */
    private $toCurrency = null;

    /**
     * The rate used for conversion from the source currency to the target currency.
     *
     * @var float $rate
     */
    private $rate = null;

    /**
     * The date of the conversion rate.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * The base neutral unit of construction amount.
     *
     * @var float $baseNUCAmount
     */
    private $baseNUCAmount = null;

    /**
     * Offer pricing reference place holder.
     *
     * @var string $offerRPH
     */
    private $offerRPH = null;

    /**
     * Associated traveler.(s)
     *
     * @var string[] $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * Individual offer pricing if multiple offers and/or passengers are accommodated in the offer pricing.
     *
     * @var \Recranet\OTA\AirPricedOfferType\PricingAType\PricingDetailAType[] $pricingDetail
     */
    private $pricingDetail = [
        
    ];

    /**
     * Tax(es) that were applied to this pricing.
     *
     * @var \Recranet\OTA\TaxType[] $taxInfo
     */
    private $taxInfo = [
        
    ];

    /**
     * Redemption pricing information if all or a portion of this offer may be paid using points.
     *
     * @var \Recranet\OTA\AirRedemptionMilesType $redemptionPoints
     */
    private $redemptionPoints = null;

    /**
     * Rules that applied to this pricing.
     *
     * @var \Recranet\OTA\AppliedRuleType[] $appliedRule
     */
    private $appliedRule = [
        
    ];

    /**
     * Additional information that influenced the pricing, including restrictions, promotions and tax exemptions.
     *
     * @var \Recranet\OTA\AirPricingQualifierType[] $pricingQualifier
     */
    private $pricingQualifier = [
        
    ];

    /**
     * References to unique ID(s) set elsewhere in this message to associate this pricing information with.
     *
     * @var \Recranet\OTA\ApplyPriceToType $applyTo
     */
    private $applyTo = null;

    /**
     * Gets as offerQty
     *
     * The total offer quantity included in this pricing, e.g. 3 seats.
     *
     * @return int
     */
    public function getOfferQty()
    {
        return $this->offerQty;
    }

    /**
     * Sets a new offerQty
     *
     * The total offer quantity included in this pricing, e.g. 3 seats.
     *
     * @param int $offerQty
     * @return self
     */
    public function setOfferQty($offerQty)
    {
        $this->offerQty = $offerQty;
        return $this;
    }

    /**
     * Gets as passengerQty
     *
     * The total quantity of passengers accommodated.
     *
     * @return int
     */
    public function getPassengerQty()
    {
        return $this->passengerQty;
    }

    /**
     * Sets a new passengerQty
     *
     * The total quantity of passengers accommodated.
     *
     * @param int $passengerQty
     * @return self
     */
    public function setPassengerQty($passengerQty)
    {
        $this->passengerQty = $passengerQty;
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
     * Implementer: If there is no cost associated with the offer or redemption miles are being used, set this value to 0.
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
     * Implementer: If there is no cost associated with the offer or redemption miles are being used, set this value to 0.
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
     * Gets as pricingCurrency
     *
     * The pricing/filing currency in ISO 4217 encoding.
     * CAD = Canadian Dollar | USD = United States Dollar | EUR = Euro
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getPricingCurrency()
    {
        return $this->pricingCurrency;
    }

    /**
     * Sets a new pricingCurrency
     *
     * The pricing/filing currency in ISO 4217 encoding.
     * CAD = Canadian Dollar | USD = United States Dollar | EUR = Euro
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $pricingCurrency
     * @return self
     */
    public function setPricingCurrency($pricingCurrency)
    {
        $this->pricingCurrency = $pricingCurrency;
        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The number of decimal places for the display and pricing currency(s).
     * USD 8500 with "2" Decimal Places represents $85.
     * http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/currency_codes/currency_codes_list-1.htm
     * This is equivalent to the ISO 4217 standard "minor unit" and is typically used when the amount provided includes the minor unit of currency without a decimal point.
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
     * The number of decimal places for the display and pricing currency(s).
     * USD 8500 with "2" Decimal Places represents $85.
     * http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/currency_codes/currency_codes_list-1.htm
     * This is equivalent to the ISO 4217 standard "minor unit" and is typically used when the amount provided includes the minor unit of currency without a decimal point.
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
     * Gets as fromCurrency
     *
     * The source currency code for a conversion in ISO 4217 endoding.
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getFromCurrency()
    {
        return $this->fromCurrency;
    }

    /**
     * Sets a new fromCurrency
     *
     * The source currency code for a conversion in ISO 4217 endoding.
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $fromCurrency
     * @return self
     */
    public function setFromCurrency($fromCurrency)
    {
        $this->fromCurrency = $fromCurrency;
        return $this;
    }

    /**
     * Gets as toCurrency
     *
     * The target currency for the conversion in ISO 4217 encoding.
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getToCurrency()
    {
        return $this->toCurrency;
    }

    /**
     * Sets a new toCurrency
     *
     * The target currency for the conversion in ISO 4217 encoding.
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $toCurrency
     * @return self
     */
    public function setToCurrency($toCurrency)
    {
        $this->toCurrency = $toCurrency;
        return $this;
    }

    /**
     * Gets as rate
     *
     * The rate used for conversion from the source currency to the target currency.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * The rate used for conversion from the source currency to the target currency.
     *
     * @param float $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date of the conversion rate.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date of the conversion rate.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as baseNUCAmount
     *
     * The base neutral unit of construction amount.
     *
     * @return float
     */
    public function getBaseNUCAmount()
    {
        return $this->baseNUCAmount;
    }

    /**
     * Sets a new baseNUCAmount
     *
     * The base neutral unit of construction amount.
     *
     * @param float $baseNUCAmount
     * @return self
     */
    public function setBaseNUCAmount($baseNUCAmount)
    {
        $this->baseNUCAmount = $baseNUCAmount;
        return $this;
    }

    /**
     * Gets as offerRPH
     *
     * Offer pricing reference place holder.
     *
     * @return string
     */
    public function getOfferRPH()
    {
        return $this->offerRPH;
    }

    /**
     * Sets a new offerRPH
     *
     * Offer pricing reference place holder.
     *
     * @param string $offerRPH
     * @return self
     */
    public function setOfferRPH($offerRPH)
    {
        $this->offerRPH = $offerRPH;
        return $this;
    }

    /**
     * Adds as travelerRPH
     *
     * Associated traveler.(s)
     *
     * @return self
     * @param string $travelerRPH
     */
    public function addToTravelerRPH($travelerRPH)
    {
        $this->travelerRPH[] = $travelerRPH;
        return $this;
    }

    /**
     * isset travelerRPH
     *
     * Associated traveler.(s)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTravelerRPH($index)
    {
        return isset($this->travelerRPH[$index]);
    }

    /**
     * unset travelerRPH
     *
     * Associated traveler.(s)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTravelerRPH($index)
    {
        unset($this->travelerRPH[$index]);
    }

    /**
     * Gets as travelerRPH
     *
     * Associated traveler.(s)
     *
     * @return string[]
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * Associated traveler.(s)
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH(array $travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;
        return $this;
    }

    /**
     * Adds as pricingDetail
     *
     * Individual offer pricing if multiple offers and/or passengers are accommodated in the offer pricing.
     *
     * @return self
     * @param \Recranet\OTA\AirPricedOfferType\PricingAType\PricingDetailAType $pricingDetail
     */
    public function addToPricingDetail(\Recranet\OTA\AirPricedOfferType\PricingAType\PricingDetailAType $pricingDetail)
    {
        $this->pricingDetail[] = $pricingDetail;
        return $this;
    }

    /**
     * isset pricingDetail
     *
     * Individual offer pricing if multiple offers and/or passengers are accommodated in the offer pricing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricingDetail($index)
    {
        return isset($this->pricingDetail[$index]);
    }

    /**
     * unset pricingDetail
     *
     * Individual offer pricing if multiple offers and/or passengers are accommodated in the offer pricing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricingDetail($index)
    {
        unset($this->pricingDetail[$index]);
    }

    /**
     * Gets as pricingDetail
     *
     * Individual offer pricing if multiple offers and/or passengers are accommodated in the offer pricing.
     *
     * @return \Recranet\OTA\AirPricedOfferType\PricingAType\PricingDetailAType[]
     */
    public function getPricingDetail()
    {
        return $this->pricingDetail;
    }

    /**
     * Sets a new pricingDetail
     *
     * Individual offer pricing if multiple offers and/or passengers are accommodated in the offer pricing.
     *
     * @param \Recranet\OTA\AirPricedOfferType\PricingAType\PricingDetailAType[] $pricingDetail
     * @return self
     */
    public function setPricingDetail(array $pricingDetail = null)
    {
        $this->pricingDetail = $pricingDetail;
        return $this;
    }

    /**
     * Adds as taxInfo
     *
     * Tax(es) that were applied to this pricing.
     *
     * @return self
     * @param \Recranet\OTA\TaxType $taxInfo
     */
    public function addToTaxInfo(\Recranet\OTA\TaxType $taxInfo)
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
     * @return \Recranet\OTA\TaxType[]
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
     * @param \Recranet\OTA\TaxType[] $taxInfo
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
     * @return \Recranet\OTA\AirRedemptionMilesType
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
     * @param \Recranet\OTA\AirRedemptionMilesType $redemptionPoints
     * @return self
     */
    public function setRedemptionPoints(?\Recranet\OTA\AirRedemptionMilesType $redemptionPoints = null)
    {
        $this->redemptionPoints = $redemptionPoints;
        return $this;
    }

    /**
     * Adds as appliedRule
     *
     * Rules that applied to this pricing.
     *
     * @return self
     * @param \Recranet\OTA\AppliedRuleType $appliedRule
     */
    public function addToAppliedRule(\Recranet\OTA\AppliedRuleType $appliedRule)
    {
        $this->appliedRule[] = $appliedRule;
        return $this;
    }

    /**
     * isset appliedRule
     *
     * Rules that applied to this pricing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAppliedRule($index)
    {
        return isset($this->appliedRule[$index]);
    }

    /**
     * unset appliedRule
     *
     * Rules that applied to this pricing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAppliedRule($index)
    {
        unset($this->appliedRule[$index]);
    }

    /**
     * Gets as appliedRule
     *
     * Rules that applied to this pricing.
     *
     * @return \Recranet\OTA\AppliedRuleType[]
     */
    public function getAppliedRule()
    {
        return $this->appliedRule;
    }

    /**
     * Sets a new appliedRule
     *
     * Rules that applied to this pricing.
     *
     * @param \Recranet\OTA\AppliedRuleType[] $appliedRule
     * @return self
     */
    public function setAppliedRule(array $appliedRule = null)
    {
        $this->appliedRule = $appliedRule;
        return $this;
    }

    /**
     * Adds as pricingQualifier
     *
     * Additional information that influenced the pricing, including restrictions, promotions and tax exemptions.
     *
     * @return self
     * @param \Recranet\OTA\AirPricingQualifierType $pricingQualifier
     */
    public function addToPricingQualifier(\Recranet\OTA\AirPricingQualifierType $pricingQualifier)
    {
        $this->pricingQualifier[] = $pricingQualifier;
        return $this;
    }

    /**
     * isset pricingQualifier
     *
     * Additional information that influenced the pricing, including restrictions, promotions and tax exemptions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricingQualifier($index)
    {
        return isset($this->pricingQualifier[$index]);
    }

    /**
     * unset pricingQualifier
     *
     * Additional information that influenced the pricing, including restrictions, promotions and tax exemptions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricingQualifier($index)
    {
        unset($this->pricingQualifier[$index]);
    }

    /**
     * Gets as pricingQualifier
     *
     * Additional information that influenced the pricing, including restrictions, promotions and tax exemptions.
     *
     * @return \Recranet\OTA\AirPricingQualifierType[]
     */
    public function getPricingQualifier()
    {
        return $this->pricingQualifier;
    }

    /**
     * Sets a new pricingQualifier
     *
     * Additional information that influenced the pricing, including restrictions, promotions and tax exemptions.
     *
     * @param \Recranet\OTA\AirPricingQualifierType[] $pricingQualifier
     * @return self
     */
    public function setPricingQualifier(array $pricingQualifier = null)
    {
        $this->pricingQualifier = $pricingQualifier;
        return $this;
    }

    /**
     * Gets as applyTo
     *
     * References to unique ID(s) set elsewhere in this message to associate this pricing information with.
     *
     * @return \Recranet\OTA\ApplyPriceToType
     */
    public function getApplyTo()
    {
        return $this->applyTo;
    }

    /**
     * Sets a new applyTo
     *
     * References to unique ID(s) set elsewhere in this message to associate this pricing information with.
     *
     * @param \Recranet\OTA\ApplyPriceToType $applyTo
     * @return self
     */
    public function setApplyTo(?\Recranet\OTA\ApplyPriceToType $applyTo = null)
    {
        $this->applyTo = $applyTo;
        return $this;
    }
}

