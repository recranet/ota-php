<?php

namespace Recranet\OTA\Type\VehicleAvailRQCoreType;

/**
 * Class representing RateQualifierAType
 */
class RateQualifierAType
{
    /**
     * Used to indicate the purpose, whether for business, personal or other. Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @var string $travelPurpose
     */
    private $travelPurpose = null;

    /**
     * The RateCategory attribute defines a set of valid values for the category of a rate. Typically rates are offered as either Leisure rates or Business (Corporate) rates, with a business rate usually including additional costs such as the cost of insurance, etc. This set of values defines the rate categories. Refer to OpenTravel Code List Rate Category (RTC).
     *
     * @var string $rateCategory
     */
    private $rateCategory = null;

    /**
     * This is the vendor specific code used to identify a special rate associated with a specific organization.
     *
     * @var string $corpDiscountNmbr
     */
    private $corpDiscountNmbr = null;

    /**
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
     *
     * @var string $promotionCode
     */
    private $promotionCode = null;

    /**
     * List of the vendor codes associated with a promotion.
     *
     * @var string[] $promotionVendorCode
     */
    private $promotionVendorCode = null;

    /**
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @var string $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * The RatePeriod attribute defines the type of rate that may be applied. For example, typically car rental rates differ based upon the duration of the rental, and the actual rate is then expressed in terms of the period of the rental.
     *
     * @var string $ratePeriod
     */
    private $ratePeriod = null;

    /**
     * When true, only guaranteed rates should be returned. When false, all rates should be returned.
     *
     * @var bool $guaranteedInd
     */
    private $guaranteedInd = null;

    /**
     * Gets as travelPurpose
     *
     * Used to indicate the purpose, whether for business, personal or other. Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @return string
     */
    public function getTravelPurpose()
    {
        return $this->travelPurpose;
    }

    /**
     * Sets a new travelPurpose
     *
     * Used to indicate the purpose, whether for business, personal or other. Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @param string $travelPurpose
     * @return self
     */
    public function setTravelPurpose($travelPurpose)
    {
        $this->travelPurpose = $travelPurpose;
        return $this;
    }

    /**
     * Gets as rateCategory
     *
     * The RateCategory attribute defines a set of valid values for the category of a rate. Typically rates are offered as either Leisure rates or Business (Corporate) rates, with a business rate usually including additional costs such as the cost of insurance, etc. This set of values defines the rate categories. Refer to OpenTravel Code List Rate Category (RTC).
     *
     * @return string
     */
    public function getRateCategory()
    {
        return $this->rateCategory;
    }

    /**
     * Sets a new rateCategory
     *
     * The RateCategory attribute defines a set of valid values for the category of a rate. Typically rates are offered as either Leisure rates or Business (Corporate) rates, with a business rate usually including additional costs such as the cost of insurance, etc. This set of values defines the rate categories. Refer to OpenTravel Code List Rate Category (RTC).
     *
     * @param string $rateCategory
     * @return self
     */
    public function setRateCategory($rateCategory)
    {
        $this->rateCategory = $rateCategory;
        return $this;
    }

    /**
     * Gets as corpDiscountNmbr
     *
     * This is the vendor specific code used to identify a special rate associated with a specific organization.
     *
     * @return string
     */
    public function getCorpDiscountNmbr()
    {
        return $this->corpDiscountNmbr;
    }

    /**
     * Sets a new corpDiscountNmbr
     *
     * This is the vendor specific code used to identify a special rate associated with a specific organization.
     *
     * @param string $corpDiscountNmbr
     * @return self
     */
    public function setCorpDiscountNmbr($corpDiscountNmbr)
    {
        $this->corpDiscountNmbr = $corpDiscountNmbr;
        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;
        return $this;
    }

    /**
     * Adds as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return self
     * @param string $promotionVendorCode
     */
    public function addToPromotionVendorCode($promotionVendorCode)
    {
        $this->promotionVendorCode[] = $promotionVendorCode;
        return $this;
    }

    /**
     * isset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionVendorCode($index)
    {
        return isset($this->promotionVendorCode[$index]);
    }

    /**
     * unset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionVendorCode($index)
    {
        unset($this->promotionVendorCode[$index]);
    }

    /**
     * Gets as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return string[]
     */
    public function getPromotionVendorCode()
    {
        return $this->promotionVendorCode;
    }

    /**
     * Sets a new promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param string $promotionVendorCode
     * @return self
     */
    public function setPromotionVendorCode(array $promotionVendorCode)
    {
        $this->promotionVendorCode = $promotionVendorCode;
        return $this;
    }

    /**
     * Gets as rateQualifier
     *
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @return string
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @param string $rateQualifier
     * @return self
     */
    public function setRateQualifier($rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;
        return $this;
    }

    /**
     * Gets as ratePeriod
     *
     * The RatePeriod attribute defines the type of rate that may be applied. For example, typically car rental rates differ based upon the duration of the rental, and the actual rate is then expressed in terms of the period of the rental.
     *
     * @return string
     */
    public function getRatePeriod()
    {
        return $this->ratePeriod;
    }

    /**
     * Sets a new ratePeriod
     *
     * The RatePeriod attribute defines the type of rate that may be applied. For example, typically car rental rates differ based upon the duration of the rental, and the actual rate is then expressed in terms of the period of the rental.
     *
     * @param string $ratePeriod
     * @return self
     */
    public function setRatePeriod($ratePeriod)
    {
        $this->ratePeriod = $ratePeriod;
        return $this;
    }

    /**
     * Gets as guaranteedInd
     *
     * When true, only guaranteed rates should be returned. When false, all rates should be returned.
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
     * When true, only guaranteed rates should be returned. When false, all rates should be returned.
     *
     * @param bool $guaranteedInd
     * @return self
     */
    public function setGuaranteedInd($guaranteedInd)
    {
        $this->guaranteedInd = $guaranteedInd;
        return $this;
    }
}

