<?php

namespace Recranet\OTA\Type;

/**
 * Class representing HotelRatePlanType
 *
 * All details pertaining to a specific rate plan.
 * XSD Type: HotelRatePlanType
 */
class HotelRatePlanType
{
    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

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
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @var string $ratePlanType
     */
    private $ratePlanType = null;

    /**
     * A string value may be used to request a particular code or an ID if the guest qualifies for a specific rate, such as AARP, AAA, a corporate rate, etc., or to specify a negotiated code as a result of a negotiated rate.
     *
     * @var string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * A text field used to indicate a special ID code that is associated with the rate and is essential in the reservation request in order to obtain the rate. Examples are Corporate ID.
     *
     * @var string $ratePlanID
     */
    private $ratePlanID = null;

    /**
     * The Rate Plan Qualifier is used to control the sort order of RatePlans. Those Rate Plans that are not qualified will appear first, those that are qualified will appear last.
     *
     * @var bool $ratePlanQualifier
     */
    private $ratePlanQualifier = null;

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
     * Hotel systems often group multiple rate plans into a single category. This refers to that category that is specific to the hotel CRS/ PMS and should not be confused with a GDS rate category.
     *
     * @var string $ratePlanCategory
     */
    private $ratePlanCategory = null;

    /**
     * An enumerated list that defines whether the RatePlanCodeType does not apply, applies to a rate plan code or applies to a rate plan grouping code.
     *
     * @var string $ratePlanCodeType
     */
    private $ratePlanCodeType = null;

    /**
     * An enumerated type that indicates whether this is a new rate plan or an update of an existing rate plan.
     * Values: New, Delta Modification, Full Overlay Modification.
     *
     * @var string $ratePlanNotifType
     */
    private $ratePlanNotifType = null;

    /**
     * An enumerated type that indicates the status of the rate plan, ie: whether this notification is an initial announcement of a new rate plan, an update of an active (bookable) rate plan, or a notification of a rate plan that is no longer in effect.
     * Values: Initial, Active, Deactivated.
     *
     * @var string $ratePlanStatusType
     */
    private $ratePlanStatusType = null;

    /**
     * An enumerated type that indicates the scope of the rate plan notification.
     *
     * @var string $ratePlanNotifScopeType
     */
    private $ratePlanNotifScopeType = null;

    /**
     * @var bool $isCommissionable
     */
    private $isCommissionable = null;

    /**
     * @var bool $rateReturn
     */
    private $rateReturn = null;

    /**
     * Used to indicate the rate plan is subject to yield management logic. When true, the rate plan is yieldable. When false, the rate plan is not yieldable.
     *
     * @var bool $yieldableIndicator
     */
    private $yieldableIndicator = null;

    /**
     * The code that relates to the market being sold to (e.g., the corporate market, packages).
     *
     * @var string $marketCode
     */
    private $marketCode = null;

    /**
     * The amount to be added or subtracted from the rate. The new calulated value is then used by the yield management logic.
     *
     * @var float $yieldDeltaAmount
     */
    private $yieldDeltaAmount = null;

    /**
     * When true, indicates the inventory associated with the rate plan is removed from the house inventory. When false, the inventory associated to the rate plan is not removed from the house inventory.
     *
     * @var bool $inventoryAllocatedInd
     */
    private $inventoryAllocatedInd = null;

    /**
     * When true, used to indicate the rate should not be displayed. When false, indicates the rate may be displayed.
     *
     * @var bool $restrictedDisplayIndicator
     */
    private $restrictedDisplayIndicator = null;

    /**
     * This is used in conjunction with the Start attribute. When true, it indicates that the Start date is both the beginning of a season as well as the first date the rate plan is valid.
     *
     * @var bool $earliestStartIndicator
     */
    private $earliestStartIndicator = null;

    /**
     * This is used in conjunction with the End attribute. When true, it indicates that the End date is both the end of a season as well as the last date the rate plan is valid.
     *
     * @var bool $latestEndIndicator
     */
    private $latestEndIndicator = null;

    /**
     * Used to indicate what rate plan is used for shoulder night(s) booked in addition to the base nights.
     *
     * @var string $extraNightRatePlanCode
     */
    private $extraNightRatePlanCode = null;

    /**
     * The rate plan this rate plan is derived from.
     *
     * @var string $baseRatePlanCode
     */
    private $baseRatePlanCode = null;

    /**
     * The amount which should be added to the base rate plan to determine the price of this derived rate plan.
     *
     * @var float $adjustedAmount
     */
    private $adjustedAmount = null;

    /**
     * The percentage off the base rate plan amount used to determine the price of this derived rate plan.
     *
     * @var float $adjustedPercentage
     */
    private $adjustedPercentage = null;

    /**
     * The lowest amount for which this derived rate plan should be sold.
     *
     * @var float $floorAmount
     */
    private $floorAmount = null;

    /**
     * The highest amount for which this derived rate plan should be sold.
     *
     * @var float $ceilingAmount
     */
    private $ceilingAmount = null;

    /**
     * When true, the adjusted amount or adjusted percentage is added to the amount specified for the base rate plan to determine the derived rate amount. When false, the adjusted amount or adjusted percentage is subtracted from the amount specified for the base rate plan to determine the derived rate amount.
     *
     * @var bool $adjustUpIndicator
     */
    private $adjustUpIndicator = null;

    /**
     * Describes how the charge is applied. Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @var string $chargeTypeCode
     */
    private $chargeTypeCode = null;

    /**
     * Used to indicate the rate plan is eligible for loyalty points accrual. When true, the rate plan is eligible for accrual. When false, the rate plan is not eligible for accrual.
     *
     * @var bool $accrualIndicator
     */
    private $accrualIndicator = null;

    /**
     * Used to indicate that booking the rate plan will result in auto enrollment in loyalty program.
     *
     * @var bool $autoEnrollmentIndicator
     */
    private $autoEnrollmentIndicator = null;

    /**
     * A collection of destination system codes. These are systems for which this RatePlan is targeted.
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType[] $destinationSystemsCode
     */
    private $destinationSystemsCode = null;

    /**
     * A collection of booking rules. Booking rules can be sent separately in the HotelBookingRuleNotif message or as part of the RatePlanNotif.
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\BookingRulesAType $bookingRules
     */
    private $bookingRules = null;

    /**
     * A collection of Rates. Rates can be sent separately using the HotelRateAmountNotif message or as part of the RatePlanNotif.
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\RatesAType\RateAType[] $rates
     */
    private $rates = null;

    /**
     * A collection of supplements (e.g., meal plans or gala dinners).
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType[] $supplements
     */
    private $supplements = null;

    /**
     * A collection of individual offers.
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\OffersAType\OfferAType[] $offers
     */
    private $offers = null;

    /**
     * A collection of RatePlanShoulders.
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType[] $ratePlanShoulders
     */
    private $ratePlanShoulders = null;

    /**
     * A collection of Sellable Products.
     *
     * @var \Recranet\OTA\Type\SellableProductsType\SellableProductAType[] $sellableProducts
     */
    private $sellableProducts = null;

    /**
     * A Fee that is attached directly to the RatePlan. Can be used to send a global surcharge at the RatePlan level.
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\RatePlanLevelFeeAType $ratePlanLevelFee
     */
    private $ratePlanLevelFee = null;

    /**
     * Commission assoiciated with the RatePlan. This can be a percentage or a flat amount.
     *
     * @var \Recranet\OTA\Type\CommissionType $commission
     */
    private $commission = null;

    /**
     * Description of the RatePlan being Uploaded.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * The unique identifier element allows the trading partners to uniquely identify each Rate being uploaded, for transaction tracability.
     *
     * @var \Recranet\OTA\Type\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Provides hotel indentification data.
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\HotelRefAType $hotelRef
     */
    private $hotelRef = null;

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

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
     * Gets as ratePlanType
     *
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @return string
     */
    public function getRatePlanType()
    {
        return $this->ratePlanType;
    }

    /**
     * Sets a new ratePlanType
     *
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @param string $ratePlanType
     * @return self
     */
    public function setRatePlanType($ratePlanType)
    {
        $this->ratePlanType = $ratePlanType;
        return $this;
    }

    /**
     * Gets as ratePlanCode
     *
     * A string value may be used to request a particular code or an ID if the guest qualifies for a specific rate, such as AARP, AAA, a corporate rate, etc., or to specify a negotiated code as a result of a negotiated rate.
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
     * A string value may be used to request a particular code or an ID if the guest qualifies for a specific rate, such as AARP, AAA, a corporate rate, etc., or to specify a negotiated code as a result of a negotiated rate.
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
     * Gets as ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate and is essential in the reservation request in order to obtain the rate. Examples are Corporate ID.
     *
     * @return string
     */
    public function getRatePlanID()
    {
        return $this->ratePlanID;
    }

    /**
     * Sets a new ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate and is essential in the reservation request in order to obtain the rate. Examples are Corporate ID.
     *
     * @param string $ratePlanID
     * @return self
     */
    public function setRatePlanID($ratePlanID)
    {
        $this->ratePlanID = $ratePlanID;
        return $this;
    }

    /**
     * Gets as ratePlanQualifier
     *
     * The Rate Plan Qualifier is used to control the sort order of RatePlans. Those Rate Plans that are not qualified will appear first, those that are qualified will appear last.
     *
     * @return bool
     */
    public function getRatePlanQualifier()
    {
        return $this->ratePlanQualifier;
    }

    /**
     * Sets a new ratePlanQualifier
     *
     * The Rate Plan Qualifier is used to control the sort order of RatePlans. Those Rate Plans that are not qualified will appear first, those that are qualified will appear last.
     *
     * @param bool $ratePlanQualifier
     * @return self
     */
    public function setRatePlanQualifier($ratePlanQualifier)
    {
        $this->ratePlanQualifier = $ratePlanQualifier;
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
     * Gets as ratePlanCategory
     *
     * Hotel systems often group multiple rate plans into a single category. This refers to that category that is specific to the hotel CRS/ PMS and should not be confused with a GDS rate category.
     *
     * @return string
     */
    public function getRatePlanCategory()
    {
        return $this->ratePlanCategory;
    }

    /**
     * Sets a new ratePlanCategory
     *
     * Hotel systems often group multiple rate plans into a single category. This refers to that category that is specific to the hotel CRS/ PMS and should not be confused with a GDS rate category.
     *
     * @param string $ratePlanCategory
     * @return self
     */
    public function setRatePlanCategory($ratePlanCategory)
    {
        $this->ratePlanCategory = $ratePlanCategory;
        return $this;
    }

    /**
     * Gets as ratePlanCodeType
     *
     * An enumerated list that defines whether the RatePlanCodeType does not apply, applies to a rate plan code or applies to a rate plan grouping code.
     *
     * @return string
     */
    public function getRatePlanCodeType()
    {
        return $this->ratePlanCodeType;
    }

    /**
     * Sets a new ratePlanCodeType
     *
     * An enumerated list that defines whether the RatePlanCodeType does not apply, applies to a rate plan code or applies to a rate plan grouping code.
     *
     * @param string $ratePlanCodeType
     * @return self
     */
    public function setRatePlanCodeType($ratePlanCodeType)
    {
        $this->ratePlanCodeType = $ratePlanCodeType;
        return $this;
    }

    /**
     * Gets as ratePlanNotifType
     *
     * An enumerated type that indicates whether this is a new rate plan or an update of an existing rate plan.
     * Values: New, Delta Modification, Full Overlay Modification.
     *
     * @return string
     */
    public function getRatePlanNotifType()
    {
        return $this->ratePlanNotifType;
    }

    /**
     * Sets a new ratePlanNotifType
     *
     * An enumerated type that indicates whether this is a new rate plan or an update of an existing rate plan.
     * Values: New, Delta Modification, Full Overlay Modification.
     *
     * @param string $ratePlanNotifType
     * @return self
     */
    public function setRatePlanNotifType($ratePlanNotifType)
    {
        $this->ratePlanNotifType = $ratePlanNotifType;
        return $this;
    }

    /**
     * Gets as ratePlanStatusType
     *
     * An enumerated type that indicates the status of the rate plan, ie: whether this notification is an initial announcement of a new rate plan, an update of an active (bookable) rate plan, or a notification of a rate plan that is no longer in effect.
     * Values: Initial, Active, Deactivated.
     *
     * @return string
     */
    public function getRatePlanStatusType()
    {
        return $this->ratePlanStatusType;
    }

    /**
     * Sets a new ratePlanStatusType
     *
     * An enumerated type that indicates the status of the rate plan, ie: whether this notification is an initial announcement of a new rate plan, an update of an active (bookable) rate plan, or a notification of a rate plan that is no longer in effect.
     * Values: Initial, Active, Deactivated.
     *
     * @param string $ratePlanStatusType
     * @return self
     */
    public function setRatePlanStatusType($ratePlanStatusType)
    {
        $this->ratePlanStatusType = $ratePlanStatusType;
        return $this;
    }

    /**
     * Gets as ratePlanNotifScopeType
     *
     * An enumerated type that indicates the scope of the rate plan notification.
     *
     * @return string
     */
    public function getRatePlanNotifScopeType()
    {
        return $this->ratePlanNotifScopeType;
    }

    /**
     * Sets a new ratePlanNotifScopeType
     *
     * An enumerated type that indicates the scope of the rate plan notification.
     *
     * @param string $ratePlanNotifScopeType
     * @return self
     */
    public function setRatePlanNotifScopeType($ratePlanNotifScopeType)
    {
        $this->ratePlanNotifScopeType = $ratePlanNotifScopeType;
        return $this;
    }

    /**
     * Gets as isCommissionable
     *
     * @return bool
     */
    public function getIsCommissionable()
    {
        return $this->isCommissionable;
    }

    /**
     * Sets a new isCommissionable
     *
     * @param bool $isCommissionable
     * @return self
     */
    public function setIsCommissionable($isCommissionable)
    {
        $this->isCommissionable = $isCommissionable;
        return $this;
    }

    /**
     * Gets as rateReturn
     *
     * @return bool
     */
    public function getRateReturn()
    {
        return $this->rateReturn;
    }

    /**
     * Sets a new rateReturn
     *
     * @param bool $rateReturn
     * @return self
     */
    public function setRateReturn($rateReturn)
    {
        $this->rateReturn = $rateReturn;
        return $this;
    }

    /**
     * Gets as yieldableIndicator
     *
     * Used to indicate the rate plan is subject to yield management logic. When true, the rate plan is yieldable. When false, the rate plan is not yieldable.
     *
     * @return bool
     */
    public function getYieldableIndicator()
    {
        return $this->yieldableIndicator;
    }

    /**
     * Sets a new yieldableIndicator
     *
     * Used to indicate the rate plan is subject to yield management logic. When true, the rate plan is yieldable. When false, the rate plan is not yieldable.
     *
     * @param bool $yieldableIndicator
     * @return self
     */
    public function setYieldableIndicator($yieldableIndicator)
    {
        $this->yieldableIndicator = $yieldableIndicator;
        return $this;
    }

    /**
     * Gets as marketCode
     *
     * The code that relates to the market being sold to (e.g., the corporate market, packages).
     *
     * @return string
     */
    public function getMarketCode()
    {
        return $this->marketCode;
    }

    /**
     * Sets a new marketCode
     *
     * The code that relates to the market being sold to (e.g., the corporate market, packages).
     *
     * @param string $marketCode
     * @return self
     */
    public function setMarketCode($marketCode)
    {
        $this->marketCode = $marketCode;
        return $this;
    }

    /**
     * Gets as yieldDeltaAmount
     *
     * The amount to be added or subtracted from the rate. The new calulated value is then used by the yield management logic.
     *
     * @return float
     */
    public function getYieldDeltaAmount()
    {
        return $this->yieldDeltaAmount;
    }

    /**
     * Sets a new yieldDeltaAmount
     *
     * The amount to be added or subtracted from the rate. The new calulated value is then used by the yield management logic.
     *
     * @param float $yieldDeltaAmount
     * @return self
     */
    public function setYieldDeltaAmount($yieldDeltaAmount)
    {
        $this->yieldDeltaAmount = $yieldDeltaAmount;
        return $this;
    }

    /**
     * Gets as inventoryAllocatedInd
     *
     * When true, indicates the inventory associated with the rate plan is removed from the house inventory. When false, the inventory associated to the rate plan is not removed from the house inventory.
     *
     * @return bool
     */
    public function getInventoryAllocatedInd()
    {
        return $this->inventoryAllocatedInd;
    }

    /**
     * Sets a new inventoryAllocatedInd
     *
     * When true, indicates the inventory associated with the rate plan is removed from the house inventory. When false, the inventory associated to the rate plan is not removed from the house inventory.
     *
     * @param bool $inventoryAllocatedInd
     * @return self
     */
    public function setInventoryAllocatedInd($inventoryAllocatedInd)
    {
        $this->inventoryAllocatedInd = $inventoryAllocatedInd;
        return $this;
    }

    /**
     * Gets as restrictedDisplayIndicator
     *
     * When true, used to indicate the rate should not be displayed. When false, indicates the rate may be displayed.
     *
     * @return bool
     */
    public function getRestrictedDisplayIndicator()
    {
        return $this->restrictedDisplayIndicator;
    }

    /**
     * Sets a new restrictedDisplayIndicator
     *
     * When true, used to indicate the rate should not be displayed. When false, indicates the rate may be displayed.
     *
     * @param bool $restrictedDisplayIndicator
     * @return self
     */
    public function setRestrictedDisplayIndicator($restrictedDisplayIndicator)
    {
        $this->restrictedDisplayIndicator = $restrictedDisplayIndicator;
        return $this;
    }

    /**
     * Gets as earliestStartIndicator
     *
     * This is used in conjunction with the Start attribute. When true, it indicates that the Start date is both the beginning of a season as well as the first date the rate plan is valid.
     *
     * @return bool
     */
    public function getEarliestStartIndicator()
    {
        return $this->earliestStartIndicator;
    }

    /**
     * Sets a new earliestStartIndicator
     *
     * This is used in conjunction with the Start attribute. When true, it indicates that the Start date is both the beginning of a season as well as the first date the rate plan is valid.
     *
     * @param bool $earliestStartIndicator
     * @return self
     */
    public function setEarliestStartIndicator($earliestStartIndicator)
    {
        $this->earliestStartIndicator = $earliestStartIndicator;
        return $this;
    }

    /**
     * Gets as latestEndIndicator
     *
     * This is used in conjunction with the End attribute. When true, it indicates that the End date is both the end of a season as well as the last date the rate plan is valid.
     *
     * @return bool
     */
    public function getLatestEndIndicator()
    {
        return $this->latestEndIndicator;
    }

    /**
     * Sets a new latestEndIndicator
     *
     * This is used in conjunction with the End attribute. When true, it indicates that the End date is both the end of a season as well as the last date the rate plan is valid.
     *
     * @param bool $latestEndIndicator
     * @return self
     */
    public function setLatestEndIndicator($latestEndIndicator)
    {
        $this->latestEndIndicator = $latestEndIndicator;
        return $this;
    }

    /**
     * Gets as extraNightRatePlanCode
     *
     * Used to indicate what rate plan is used for shoulder night(s) booked in addition to the base nights.
     *
     * @return string
     */
    public function getExtraNightRatePlanCode()
    {
        return $this->extraNightRatePlanCode;
    }

    /**
     * Sets a new extraNightRatePlanCode
     *
     * Used to indicate what rate plan is used for shoulder night(s) booked in addition to the base nights.
     *
     * @param string $extraNightRatePlanCode
     * @return self
     */
    public function setExtraNightRatePlanCode($extraNightRatePlanCode)
    {
        $this->extraNightRatePlanCode = $extraNightRatePlanCode;
        return $this;
    }

    /**
     * Gets as baseRatePlanCode
     *
     * The rate plan this rate plan is derived from.
     *
     * @return string
     */
    public function getBaseRatePlanCode()
    {
        return $this->baseRatePlanCode;
    }

    /**
     * Sets a new baseRatePlanCode
     *
     * The rate plan this rate plan is derived from.
     *
     * @param string $baseRatePlanCode
     * @return self
     */
    public function setBaseRatePlanCode($baseRatePlanCode)
    {
        $this->baseRatePlanCode = $baseRatePlanCode;
        return $this;
    }

    /**
     * Gets as adjustedAmount
     *
     * The amount which should be added to the base rate plan to determine the price of this derived rate plan.
     *
     * @return float
     */
    public function getAdjustedAmount()
    {
        return $this->adjustedAmount;
    }

    /**
     * Sets a new adjustedAmount
     *
     * The amount which should be added to the base rate plan to determine the price of this derived rate plan.
     *
     * @param float $adjustedAmount
     * @return self
     */
    public function setAdjustedAmount($adjustedAmount)
    {
        $this->adjustedAmount = $adjustedAmount;
        return $this;
    }

    /**
     * Gets as adjustedPercentage
     *
     * The percentage off the base rate plan amount used to determine the price of this derived rate plan.
     *
     * @return float
     */
    public function getAdjustedPercentage()
    {
        return $this->adjustedPercentage;
    }

    /**
     * Sets a new adjustedPercentage
     *
     * The percentage off the base rate plan amount used to determine the price of this derived rate plan.
     *
     * @param float $adjustedPercentage
     * @return self
     */
    public function setAdjustedPercentage($adjustedPercentage)
    {
        $this->adjustedPercentage = $adjustedPercentage;
        return $this;
    }

    /**
     * Gets as floorAmount
     *
     * The lowest amount for which this derived rate plan should be sold.
     *
     * @return float
     */
    public function getFloorAmount()
    {
        return $this->floorAmount;
    }

    /**
     * Sets a new floorAmount
     *
     * The lowest amount for which this derived rate plan should be sold.
     *
     * @param float $floorAmount
     * @return self
     */
    public function setFloorAmount($floorAmount)
    {
        $this->floorAmount = $floorAmount;
        return $this;
    }

    /**
     * Gets as ceilingAmount
     *
     * The highest amount for which this derived rate plan should be sold.
     *
     * @return float
     */
    public function getCeilingAmount()
    {
        return $this->ceilingAmount;
    }

    /**
     * Sets a new ceilingAmount
     *
     * The highest amount for which this derived rate plan should be sold.
     *
     * @param float $ceilingAmount
     * @return self
     */
    public function setCeilingAmount($ceilingAmount)
    {
        $this->ceilingAmount = $ceilingAmount;
        return $this;
    }

    /**
     * Gets as adjustUpIndicator
     *
     * When true, the adjusted amount or adjusted percentage is added to the amount specified for the base rate plan to determine the derived rate amount. When false, the adjusted amount or adjusted percentage is subtracted from the amount specified for the base rate plan to determine the derived rate amount.
     *
     * @return bool
     */
    public function getAdjustUpIndicator()
    {
        return $this->adjustUpIndicator;
    }

    /**
     * Sets a new adjustUpIndicator
     *
     * When true, the adjusted amount or adjusted percentage is added to the amount specified for the base rate plan to determine the derived rate amount. When false, the adjusted amount or adjusted percentage is subtracted from the amount specified for the base rate plan to determine the derived rate amount.
     *
     * @param bool $adjustUpIndicator
     * @return self
     */
    public function setAdjustUpIndicator($adjustUpIndicator)
    {
        $this->adjustUpIndicator = $adjustUpIndicator;
        return $this;
    }

    /**
     * Gets as chargeTypeCode
     *
     * Describes how the charge is applied. Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @return string
     */
    public function getChargeTypeCode()
    {
        return $this->chargeTypeCode;
    }

    /**
     * Sets a new chargeTypeCode
     *
     * Describes how the charge is applied. Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @param string $chargeTypeCode
     * @return self
     */
    public function setChargeTypeCode($chargeTypeCode)
    {
        $this->chargeTypeCode = $chargeTypeCode;
        return $this;
    }

    /**
     * Gets as accrualIndicator
     *
     * Used to indicate the rate plan is eligible for loyalty points accrual. When true, the rate plan is eligible for accrual. When false, the rate plan is not eligible for accrual.
     *
     * @return bool
     */
    public function getAccrualIndicator()
    {
        return $this->accrualIndicator;
    }

    /**
     * Sets a new accrualIndicator
     *
     * Used to indicate the rate plan is eligible for loyalty points accrual. When true, the rate plan is eligible for accrual. When false, the rate plan is not eligible for accrual.
     *
     * @param bool $accrualIndicator
     * @return self
     */
    public function setAccrualIndicator($accrualIndicator)
    {
        $this->accrualIndicator = $accrualIndicator;
        return $this;
    }

    /**
     * Gets as autoEnrollmentIndicator
     *
     * Used to indicate that booking the rate plan will result in auto enrollment in loyalty program.
     *
     * @return bool
     */
    public function getAutoEnrollmentIndicator()
    {
        return $this->autoEnrollmentIndicator;
    }

    /**
     * Sets a new autoEnrollmentIndicator
     *
     * Used to indicate that booking the rate plan will result in auto enrollment in loyalty program.
     *
     * @param bool $autoEnrollmentIndicator
     * @return self
     */
    public function setAutoEnrollmentIndicator($autoEnrollmentIndicator)
    {
        $this->autoEnrollmentIndicator = $autoEnrollmentIndicator;
        return $this;
    }

    /**
     * Adds as destinationSystemCode
     *
     * A collection of destination system codes. These are systems for which this RatePlan is targeted.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType $destinationSystemCode
     */
    public function addToDestinationSystemsCode(\Recranet\OTA\Type\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType $destinationSystemCode)
    {
        $this->destinationSystemsCode[] = $destinationSystemCode;
        return $this;
    }

    /**
     * isset destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this RatePlan is targeted.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDestinationSystemsCode($index)
    {
        return isset($this->destinationSystemsCode[$index]);
    }

    /**
     * unset destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this RatePlan is targeted.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDestinationSystemsCode($index)
    {
        unset($this->destinationSystemsCode[$index]);
    }

    /**
     * Gets as destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this RatePlan is targeted.
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType[]
     */
    public function getDestinationSystemsCode()
    {
        return $this->destinationSystemsCode;
    }

    /**
     * Sets a new destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this RatePlan is targeted.
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType[] $destinationSystemsCode
     * @return self
     */
    public function setDestinationSystemsCode(array $destinationSystemsCode = null)
    {
        $this->destinationSystemsCode = $destinationSystemsCode;
        return $this;
    }

    /**
     * Gets as bookingRules
     *
     * A collection of booking rules. Booking rules can be sent separately in the HotelBookingRuleNotif message or as part of the RatePlanNotif.
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\BookingRulesAType
     */
    public function getBookingRules()
    {
        return $this->bookingRules;
    }

    /**
     * Sets a new bookingRules
     *
     * A collection of booking rules. Booking rules can be sent separately in the HotelBookingRuleNotif message or as part of the RatePlanNotif.
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\BookingRulesAType $bookingRules
     * @return self
     */
    public function setBookingRules(?\Recranet\OTA\Type\HotelRatePlanType\BookingRulesAType $bookingRules = null)
    {
        $this->bookingRules = $bookingRules;
        return $this;
    }

    /**
     * Adds as rate
     *
     * A collection of Rates. Rates can be sent separately using the HotelRateAmountNotif message or as part of the RatePlanNotif.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelRatePlanType\RatesAType\RateAType $rate
     */
    public function addToRates(\Recranet\OTA\Type\HotelRatePlanType\RatesAType\RateAType $rate)
    {
        $this->rates[] = $rate;
        return $this;
    }

    /**
     * isset rates
     *
     * A collection of Rates. Rates can be sent separately using the HotelRateAmountNotif message or as part of the RatePlanNotif.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRates($index)
    {
        return isset($this->rates[$index]);
    }

    /**
     * unset rates
     *
     * A collection of Rates. Rates can be sent separately using the HotelRateAmountNotif message or as part of the RatePlanNotif.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRates($index)
    {
        unset($this->rates[$index]);
    }

    /**
     * Gets as rates
     *
     * A collection of Rates. Rates can be sent separately using the HotelRateAmountNotif message or as part of the RatePlanNotif.
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\RatesAType\RateAType[]
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * Sets a new rates
     *
     * A collection of Rates. Rates can be sent separately using the HotelRateAmountNotif message or as part of the RatePlanNotif.
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\RatesAType\RateAType[] $rates
     * @return self
     */
    public function setRates(array $rates = null)
    {
        $this->rates = $rates;
        return $this;
    }

    /**
     * Adds as supplement
     *
     * A collection of supplements (e.g., meal plans or gala dinners).
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType $supplement
     */
    public function addToSupplements(\Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType $supplement)
    {
        $this->supplements[] = $supplement;
        return $this;
    }

    /**
     * isset supplements
     *
     * A collection of supplements (e.g., meal plans or gala dinners).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplements($index)
    {
        return isset($this->supplements[$index]);
    }

    /**
     * unset supplements
     *
     * A collection of supplements (e.g., meal plans or gala dinners).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplements($index)
    {
        unset($this->supplements[$index]);
    }

    /**
     * Gets as supplements
     *
     * A collection of supplements (e.g., meal plans or gala dinners).
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType[]
     */
    public function getSupplements()
    {
        return $this->supplements;
    }

    /**
     * Sets a new supplements
     *
     * A collection of supplements (e.g., meal plans or gala dinners).
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType[] $supplements
     * @return self
     */
    public function setSupplements(array $supplements = null)
    {
        $this->supplements = $supplements;
        return $this;
    }

    /**
     * Adds as offer
     *
     * A collection of individual offers.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelRatePlanType\OffersAType\OfferAType $offer
     */
    public function addToOffers(\Recranet\OTA\Type\HotelRatePlanType\OffersAType\OfferAType $offer)
    {
        $this->offers[] = $offer;
        return $this;
    }

    /**
     * isset offers
     *
     * A collection of individual offers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffers($index)
    {
        return isset($this->offers[$index]);
    }

    /**
     * unset offers
     *
     * A collection of individual offers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffers($index)
    {
        unset($this->offers[$index]);
    }

    /**
     * Gets as offers
     *
     * A collection of individual offers.
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\OffersAType\OfferAType[]
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Sets a new offers
     *
     * A collection of individual offers.
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\OffersAType\OfferAType[] $offers
     * @return self
     */
    public function setOffers(array $offers = null)
    {
        $this->offers = $offers;
        return $this;
    }

    /**
     * Adds as ratePlanShoulder
     *
     * A collection of RatePlanShoulders.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType $ratePlanShoulder
     */
    public function addToRatePlanShoulders(\Recranet\OTA\Type\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType $ratePlanShoulder)
    {
        $this->ratePlanShoulders[] = $ratePlanShoulder;
        return $this;
    }

    /**
     * isset ratePlanShoulders
     *
     * A collection of RatePlanShoulders.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlanShoulders($index)
    {
        return isset($this->ratePlanShoulders[$index]);
    }

    /**
     * unset ratePlanShoulders
     *
     * A collection of RatePlanShoulders.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlanShoulders($index)
    {
        unset($this->ratePlanShoulders[$index]);
    }

    /**
     * Gets as ratePlanShoulders
     *
     * A collection of RatePlanShoulders.
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType[]
     */
    public function getRatePlanShoulders()
    {
        return $this->ratePlanShoulders;
    }

    /**
     * Sets a new ratePlanShoulders
     *
     * A collection of RatePlanShoulders.
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType[] $ratePlanShoulders
     * @return self
     */
    public function setRatePlanShoulders(array $ratePlanShoulders = null)
    {
        $this->ratePlanShoulders = $ratePlanShoulders;
        return $this;
    }

    /**
     * Adds as sellableProduct
     *
     * A collection of Sellable Products.
     *
     * @return self
     * @param \Recranet\OTA\Type\SellableProductsType\SellableProductAType $sellableProduct
     */
    public function addToSellableProducts(\Recranet\OTA\Type\SellableProductsType\SellableProductAType $sellableProduct)
    {
        $this->sellableProducts[] = $sellableProduct;
        return $this;
    }

    /**
     * isset sellableProducts
     *
     * A collection of Sellable Products.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellableProducts($index)
    {
        return isset($this->sellableProducts[$index]);
    }

    /**
     * unset sellableProducts
     *
     * A collection of Sellable Products.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellableProducts($index)
    {
        unset($this->sellableProducts[$index]);
    }

    /**
     * Gets as sellableProducts
     *
     * A collection of Sellable Products.
     *
     * @return \Recranet\OTA\Type\SellableProductsType\SellableProductAType[]
     */
    public function getSellableProducts()
    {
        return $this->sellableProducts;
    }

    /**
     * Sets a new sellableProducts
     *
     * A collection of Sellable Products.
     *
     * @param \Recranet\OTA\Type\SellableProductsType\SellableProductAType[] $sellableProducts
     * @return self
     */
    public function setSellableProducts(array $sellableProducts = null)
    {
        $this->sellableProducts = $sellableProducts;
        return $this;
    }

    /**
     * Gets as ratePlanLevelFee
     *
     * A Fee that is attached directly to the RatePlan. Can be used to send a global surcharge at the RatePlan level.
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\RatePlanLevelFeeAType
     */
    public function getRatePlanLevelFee()
    {
        return $this->ratePlanLevelFee;
    }

    /**
     * Sets a new ratePlanLevelFee
     *
     * A Fee that is attached directly to the RatePlan. Can be used to send a global surcharge at the RatePlan level.
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\RatePlanLevelFeeAType $ratePlanLevelFee
     * @return self
     */
    public function setRatePlanLevelFee(?\Recranet\OTA\Type\HotelRatePlanType\RatePlanLevelFeeAType $ratePlanLevelFee = null)
    {
        $this->ratePlanLevelFee = $ratePlanLevelFee;
        return $this;
    }

    /**
     * Gets as commission
     *
     * Commission assoiciated with the RatePlan. This can be a percentage or a flat amount.
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
     * Commission assoiciated with the RatePlan. This can be a percentage or a flat amount.
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
     * Adds as description
     *
     * Description of the RatePlan being Uploaded.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $description
     */
    public function addToDescription(\Recranet\OTA\Type\ParagraphType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Description of the RatePlan being Uploaded.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Description of the RatePlan being Uploaded.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Description of the RatePlan being Uploaded.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of the RatePlan being Uploaded.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each Rate being uploaded, for transaction tracability.
     *
     * @return \Recranet\OTA\Type\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each Rate being uploaded, for transaction tracability.
     *
     * @param \Recranet\OTA\Type\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\Type\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * Provides hotel indentification data.
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\HotelRefAType
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * Provides hotel indentification data.
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\HotelRefAType $hotelRef
     * @return self
     */
    public function setHotelRef(?\Recranet\OTA\Type\HotelRatePlanType\HotelRefAType $hotelRef = null)
    {
        $this->hotelRef = $hotelRef;
        return $this;
    }
}

