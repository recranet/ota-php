<?php

namespace Recranet\OTA\Type\InvBlockRoomType\RatePlansAType;

use Recranet\OTA\Type\RateUploadType;

/**
 * Class representing RatePlanAType
 */
class RatePlanAType extends RateUploadType
{
    /**
     * The RatePlanCode assigned for the inventory item.
     *
     * @var string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * This is used to indicate the code with which to book the item and is primarily used to exchange information with GDSs or other systems.
     *
     * @var string $bookingCode
     */
    private $bookingCode = null;

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
     * Indicator that signifies whether a room block rate plan is available for room type upgrade.
     *
     * @var bool $upgradeIndicator
     */
    private $upgradeIndicator = null;

    /**
     * This is user specific information used for tracking and market segmentation reporting.
     *
     * @var \Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType\MarketCodeAType[] $marketCode
     */
    private $marketCode = [
        
    ];

    /**
     * Commission associated with the RatePlan. This can be a percentage or a flat amount.
     *
     * @var \Recranet\OTA\Type\CommissionType $commission
     */
    private $commission = null;

    /**
     * This is used to indicate the reservation and billing methods for the rate plan.
     *
     * @var \Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType\MethodInfoAType[] $methodInfo
     */
    private $methodInfo = [
        
    ];

    /**
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @var \Recranet\OTA\Type\DOWRulesType[] $daysOfWeeks
     */
    private $daysOfWeeks = null;

    /**
     * Gets as ratePlanCode
     *
     * The RatePlanCode assigned for the inventory item.
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * The RatePlanCode assigned for the inventory item.
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;
        return $this;
    }

    /**
     * Gets as bookingCode
     *
     * This is used to indicate the code with which to book the item and is primarily used to exchange information with GDSs or other systems.
     *
     * @return string
     */
    public function getBookingCode()
    {
        return $this->bookingCode;
    }

    /**
     * Sets a new bookingCode
     *
     * This is used to indicate the code with which to book the item and is primarily used to exchange information with GDSs or other systems.
     *
     * @param string $bookingCode
     * @return self
     */
    public function setBookingCode($bookingCode)
    {
        $this->bookingCode = $bookingCode;
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
     * Gets as upgradeIndicator
     *
     * Indicator that signifies whether a room block rate plan is available for room type upgrade.
     *
     * @return bool
     */
    public function getUpgradeIndicator()
    {
        return $this->upgradeIndicator;
    }

    /**
     * Sets a new upgradeIndicator
     *
     * Indicator that signifies whether a room block rate plan is available for room type upgrade.
     *
     * @param bool $upgradeIndicator
     * @return self
     */
    public function setUpgradeIndicator($upgradeIndicator)
    {
        $this->upgradeIndicator = $upgradeIndicator;
        return $this;
    }

    /**
     * Adds as marketCode
     *
     * This is user specific information used for tracking and market segmentation reporting.
     *
     * @return self
     * @param \Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType\MarketCodeAType $marketCode
     */
    public function addToMarketCode(\Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType\MarketCodeAType $marketCode)
    {
        $this->marketCode[] = $marketCode;
        return $this;
    }

    /**
     * isset marketCode
     *
     * This is user specific information used for tracking and market segmentation reporting.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketCode($index)
    {
        return isset($this->marketCode[$index]);
    }

    /**
     * unset marketCode
     *
     * This is user specific information used for tracking and market segmentation reporting.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketCode($index)
    {
        unset($this->marketCode[$index]);
    }

    /**
     * Gets as marketCode
     *
     * This is user specific information used for tracking and market segmentation reporting.
     *
     * @return \Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType\MarketCodeAType[]
     */
    public function getMarketCode()
    {
        return $this->marketCode;
    }

    /**
     * Sets a new marketCode
     *
     * This is user specific information used for tracking and market segmentation reporting.
     *
     * @param \Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType\MarketCodeAType[] $marketCode
     * @return self
     */
    public function setMarketCode(array $marketCode = null)
    {
        $this->marketCode = $marketCode;
        return $this;
    }

    /**
     * Gets as commission
     *
     * Commission associated with the RatePlan. This can be a percentage or a flat amount.
     *
     * @return \Recranet\OTA\Type\CommissionType
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Commission associated with the RatePlan. This can be a percentage or a flat amount.
     *
     * @param \Recranet\OTA\Type\CommissionType $commission
     * @return self
     */
    public function setCommission(?\Recranet\OTA\Type\CommissionType $commission = null)
    {
        $this->commission = $commission;
        return $this;
    }

    /**
     * Adds as methodInfo
     *
     * This is used to indicate the reservation and billing methods for the rate plan.
     *
     * @return self
     * @param \Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType\MethodInfoAType $methodInfo
     */
    public function addToMethodInfo(\Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType\MethodInfoAType $methodInfo)
    {
        $this->methodInfo[] = $methodInfo;
        return $this;
    }

    /**
     * isset methodInfo
     *
     * This is used to indicate the reservation and billing methods for the rate plan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMethodInfo($index)
    {
        return isset($this->methodInfo[$index]);
    }

    /**
     * unset methodInfo
     *
     * This is used to indicate the reservation and billing methods for the rate plan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMethodInfo($index)
    {
        unset($this->methodInfo[$index]);
    }

    /**
     * Gets as methodInfo
     *
     * This is used to indicate the reservation and billing methods for the rate plan.
     *
     * @return \Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType\MethodInfoAType[]
     */
    public function getMethodInfo()
    {
        return $this->methodInfo;
    }

    /**
     * Sets a new methodInfo
     *
     * This is used to indicate the reservation and billing methods for the rate plan.
     *
     * @param \Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType\MethodInfoAType[] $methodInfo
     * @return self
     */
    public function setMethodInfo(array $methodInfo = null)
    {
        $this->methodInfo = $methodInfo;
        return $this;
    }

    /**
     * Adds as daysOfWeek
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @return self
     * @param \Recranet\OTA\Type\DOWRulesType $daysOfWeek
     */
    public function addToDaysOfWeeks(\Recranet\OTA\Type\DOWRulesType $daysOfWeek)
    {
        $this->daysOfWeeks[] = $daysOfWeek;
        return $this;
    }

    /**
     * isset daysOfWeeks
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDaysOfWeeks($index)
    {
        return isset($this->daysOfWeeks[$index]);
    }

    /**
     * unset daysOfWeeks
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDaysOfWeeks($index)
    {
        unset($this->daysOfWeeks[$index]);
    }

    /**
     * Gets as daysOfWeeks
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @return \Recranet\OTA\Type\DOWRulesType[]
     */
    public function getDaysOfWeeks()
    {
        return $this->daysOfWeeks;
    }

    /**
     * Sets a new daysOfWeeks
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @param \Recranet\OTA\Type\DOWRulesType[] $daysOfWeeks
     * @return self
     */
    public function setDaysOfWeeks(array $daysOfWeeks = null)
    {
        $this->daysOfWeeks = $daysOfWeeks;
        return $this;
    }
}

