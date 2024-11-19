<?php

namespace Recranet\OTA\TravelerInfoSummaryType;

use Recranet\OTA\PriceRequestInformationType;

/**
 * Class representing PriceRequestInformationAType
 */
class PriceRequestInformationAType extends PriceRequestInformationType
{
    /**
     * Constrains the pricing to those fares with restrictions that satisfy user-imposed limitations.
     *
     * @var \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\FareRestrictionPrefAType[] $fareRestrictionPref
     */
    private $fareRestrictionPref = [
        
    ];

    /**
     * Used to specify tax information which may be used to override the taxes in the pricing system.
     *
     * @var \Recranet\OTA\AirTaxType[] $tax
     */
    private $tax = [
        
    ];

    /**
     * The information needed when a passenger presents a discount/promotional coupon for a dollar/percentage of the fare or when a passenger qualifies for a percentage discount such as a senior discount.
     *
     * @var \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType $discountPricing
     */
    private $discountPricing = null;

    /**
     * Used to specify a segment that should be overridden.
     *
     * @var \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\SegmentOverrideAType[] $segmentOverride
     */
    private $segmentOverride = [
        
    ];

    /**
     * Specifies an account code to be used in pricing.
     *
     * @var \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\AccountAType[] $account
     */
    private $account = [
        
    ];

    /**
     * Location requirement information for pricing.
     *
     * @var \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\LocationRequirementAType $locationRequirement
     */
    private $locationRequirement = null;

    /**
     * Adds as fareRestrictionPref
     *
     * Constrains the pricing to those fares with restrictions that satisfy user-imposed limitations.
     *
     * @return self
     * @param \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\FareRestrictionPrefAType $fareRestrictionPref
     */
    public function addToFareRestrictionPref(\Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\FareRestrictionPrefAType $fareRestrictionPref)
    {
        $this->fareRestrictionPref[] = $fareRestrictionPref;
        return $this;
    }

    /**
     * isset fareRestrictionPref
     *
     * Constrains the pricing to those fares with restrictions that satisfy user-imposed limitations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFareRestrictionPref($index)
    {
        return isset($this->fareRestrictionPref[$index]);
    }

    /**
     * unset fareRestrictionPref
     *
     * Constrains the pricing to those fares with restrictions that satisfy user-imposed limitations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFareRestrictionPref($index)
    {
        unset($this->fareRestrictionPref[$index]);
    }

    /**
     * Gets as fareRestrictionPref
     *
     * Constrains the pricing to those fares with restrictions that satisfy user-imposed limitations.
     *
     * @return \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\FareRestrictionPrefAType[]
     */
    public function getFareRestrictionPref()
    {
        return $this->fareRestrictionPref;
    }

    /**
     * Sets a new fareRestrictionPref
     *
     * Constrains the pricing to those fares with restrictions that satisfy user-imposed limitations.
     *
     * @param \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\FareRestrictionPrefAType[] $fareRestrictionPref
     * @return self
     */
    public function setFareRestrictionPref(array $fareRestrictionPref = null)
    {
        $this->fareRestrictionPref = $fareRestrictionPref;
        return $this;
    }

    /**
     * Adds as tax
     *
     * Used to specify tax information which may be used to override the taxes in the pricing system.
     *
     * @return self
     * @param \Recranet\OTA\AirTaxType $tax
     */
    public function addToTax(\Recranet\OTA\AirTaxType $tax)
    {
        $this->tax[] = $tax;
        return $this;
    }

    /**
     * isset tax
     *
     * Used to specify tax information which may be used to override the taxes in the pricing system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTax($index)
    {
        return isset($this->tax[$index]);
    }

    /**
     * unset tax
     *
     * Used to specify tax information which may be used to override the taxes in the pricing system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTax($index)
    {
        unset($this->tax[$index]);
    }

    /**
     * Gets as tax
     *
     * Used to specify tax information which may be used to override the taxes in the pricing system.
     *
     * @return \Recranet\OTA\AirTaxType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * Used to specify tax information which may be used to override the taxes in the pricing system.
     *
     * @param \Recranet\OTA\AirTaxType[] $tax
     * @return self
     */
    public function setTax(array $tax = null)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * Gets as discountPricing
     *
     * The information needed when a passenger presents a discount/promotional coupon for a dollar/percentage of the fare or when a passenger qualifies for a percentage discount such as a senior discount.
     *
     * @return \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType
     */
    public function getDiscountPricing()
    {
        return $this->discountPricing;
    }

    /**
     * Sets a new discountPricing
     *
     * The information needed when a passenger presents a discount/promotional coupon for a dollar/percentage of the fare or when a passenger qualifies for a percentage discount such as a senior discount.
     *
     * @param \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType $discountPricing
     * @return self
     */
    public function setDiscountPricing(?\Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType $discountPricing = null)
    {
        $this->discountPricing = $discountPricing;
        return $this;
    }

    /**
     * Adds as segmentOverride
     *
     * Used to specify a segment that should be overridden.
     *
     * @return self
     * @param \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\SegmentOverrideAType $segmentOverride
     */
    public function addToSegmentOverride(\Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\SegmentOverrideAType $segmentOverride)
    {
        $this->segmentOverride[] = $segmentOverride;
        return $this;
    }

    /**
     * isset segmentOverride
     *
     * Used to specify a segment that should be overridden.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSegmentOverride($index)
    {
        return isset($this->segmentOverride[$index]);
    }

    /**
     * unset segmentOverride
     *
     * Used to specify a segment that should be overridden.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSegmentOverride($index)
    {
        unset($this->segmentOverride[$index]);
    }

    /**
     * Gets as segmentOverride
     *
     * Used to specify a segment that should be overridden.
     *
     * @return \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\SegmentOverrideAType[]
     */
    public function getSegmentOverride()
    {
        return $this->segmentOverride;
    }

    /**
     * Sets a new segmentOverride
     *
     * Used to specify a segment that should be overridden.
     *
     * @param \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\SegmentOverrideAType[] $segmentOverride
     * @return self
     */
    public function setSegmentOverride(array $segmentOverride = null)
    {
        $this->segmentOverride = $segmentOverride;
        return $this;
    }

    /**
     * Adds as account
     *
     * Specifies an account code to be used in pricing.
     *
     * @return self
     * @param \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\AccountAType $account
     */
    public function addToAccount(\Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\AccountAType $account)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * isset account
     *
     * Specifies an account code to be used in pricing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * Specifies an account code to be used in pricing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * Specifies an account code to be used in pricing.
     *
     * @return \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\AccountAType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * Specifies an account code to be used in pricing.
     *
     * @param \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\AccountAType[] $account
     * @return self
     */
    public function setAccount(array $account = null)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as locationRequirement
     *
     * Location requirement information for pricing.
     *
     * @return \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\LocationRequirementAType
     */
    public function getLocationRequirement()
    {
        return $this->locationRequirement;
    }

    /**
     * Sets a new locationRequirement
     *
     * Location requirement information for pricing.
     *
     * @param \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\LocationRequirementAType $locationRequirement
     * @return self
     */
    public function setLocationRequirement(?\Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType\LocationRequirementAType $locationRequirement = null)
    {
        $this->locationRequirement = $locationRequirement;
        return $this;
    }
}

