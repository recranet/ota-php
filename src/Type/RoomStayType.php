<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RoomStayType
 *
 * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Room Stay and finally finacial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
 * XSD Type: RoomStayType
 */
class RoomStayType
{
    /**
     * The code that relates to the market being sold to (e.g., the corporate market, packages).
     *
     * @var string $marketCode
     */
    private $marketCode = null;

    /**
     * To specify where the business came from e.g. radio, newspaper ad, etc.
     *
     * @var string $sourceOfBusiness
     */
    private $sourceOfBusiness = null;

    /**
     * A discount code known to the hotel.
     *
     * @var string $discountCode
     */
    private $discountCode = null;

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
     * Identifies the status of the room stay.
     *
     * @var string $roomStayStatus
     */
    private $roomStayStatus = null;

    /**
     * This references the RPH found in the Warning element. Used to identify the warnings associated with this RoomStay.
     *
     * @var string[] $warningRPH
     */
    private $warningRPH = null;

    /**
     * Language of the response for the RoomStay (property). Note that the requested language may not be available for all properties and so the language of the response for each property may vary.
     *
     * @var string $roomStayLanguage
     */
    private $roomStayLanguage = null;

    /**
     * An ID of a group of rooms which must be booked together.
     *
     * @var string $roomStayGroupID
     */
    private $roomStayGroupID = null;

    /**
     * A collection of Room Types associated with a particular Room Stay.
     * The RoomType element is used to contain all the room type information for a single RateType Code (ex A1K) for a given date range.
     *
     * @var \Recranet\OTA\Type\RoomTypeType[] $roomTypes
     */
    private $roomTypes = null;

    /**
     * A collection of Rate Plans associated with a particular Room Stay.
     * The rate plan element is used to contain all the rate information for a single Rate Plan Code (ex RACK) for a given date range. A given Rate Plan may have variable rates, over the effective period of the Rate Plan, this is represented by the child element Rates.
     *
     * @var \Recranet\OTA\Type\RatePlanType[] $ratePlans
     */
    private $ratePlans = null;

    /**
     * A collection of Room Rates associated with a particular Room Stay. Each Room Rate combination can have multiple rates. Example King room, Rack rate plan, Monday through Thursday, weekday amount, Friday and Saturday, weekend amount.
     * The combination of a given Rate Plan and Room Type. This allows for support for systems where Rate Plans are child of Room Type as well as systems which Room Types are child of Rate Plans.
     *
     * @var \Recranet\OTA\Type\RoomStayType\RoomRatesAType $roomRates
     */
    private $roomRates = null;

    /**
     * A collection of Guest Counts associated with Room Stay. A child Guest Count element is required for each distinct age group.
     *
     * @var \Recranet\OTA\Type\GuestCountType $guestCounts
     */
    private $guestCounts = null;

    /**
     * The Time Span which covers the Room Stay.
     *
     * @var \Recranet\OTA\Type\DateTimeSpanType $timeSpan
     */
    private $timeSpan = null;

    /**
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @var \Recranet\OTA\Type\GuaranteeType[] $guarantee
     */
    private $guarantee = [
        
    ];

    /**
     * A collection of deposit and/or payments for the Room Stay.
     *
     * @var \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType[] $depositPayments
     */
    private $depositPayments = null;

    /**
     * A collection of Cancellation Penalties objects for the Room Stay.
     *
     * @var \Recranet\OTA\Type\CancelPenaltiesType $cancelPenalties
     */
    private $cancelPenalties = null;

    /**
     * Discount percentage and/or Amount, code and textual reason for discount.
     *
     * @var \Recranet\OTA\Type\DiscountType $discount
     */
    private $discount = null;

    /**
     * The total amount charged for the Room Stay including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
     *
     * @var \Recranet\OTA\Type\TotalType $total
     */
    private $total = null;

    /**
     * Property Information for the Room Stay.
     *
     * @var \Recranet\OTA\Type\RoomStayType\BasicPropertyInfoAType $basicPropertyInfo
     */
    private $basicPropertyInfo = null;

    /**
     * When requested, a link to a map is returned in the response which indicates the position of the matching hotel(s).
     *
     * @var \Recranet\OTA\Type\RoomStayType\MapURLAType $mapURL
     */
    private $mapURL = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Gets as sourceOfBusiness
     *
     * To specify where the business came from e.g. radio, newspaper ad, etc.
     *
     * @return string
     */
    public function getSourceOfBusiness()
    {
        return $this->sourceOfBusiness;
    }

    /**
     * Sets a new sourceOfBusiness
     *
     * To specify where the business came from e.g. radio, newspaper ad, etc.
     *
     * @param string $sourceOfBusiness
     * @return self
     */
    public function setSourceOfBusiness($sourceOfBusiness)
    {
        $this->sourceOfBusiness = $sourceOfBusiness;
        return $this;
    }

    /**
     * Gets as discountCode
     *
     * A discount code known to the hotel.
     *
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    /**
     * Sets a new discountCode
     *
     * A discount code known to the hotel.
     *
     * @param string $discountCode
     * @return self
     */
    public function setDiscountCode($discountCode)
    {
        $this->discountCode = $discountCode;
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
     * Gets as roomStayStatus
     *
     * Identifies the status of the room stay.
     *
     * @return string
     */
    public function getRoomStayStatus()
    {
        return $this->roomStayStatus;
    }

    /**
     * Sets a new roomStayStatus
     *
     * Identifies the status of the room stay.
     *
     * @param string $roomStayStatus
     * @return self
     */
    public function setRoomStayStatus($roomStayStatus)
    {
        $this->roomStayStatus = $roomStayStatus;
        return $this;
    }

    /**
     * Adds as warningRPH
     *
     * This references the RPH found in the Warning element. Used to identify the warnings associated with this RoomStay.
     *
     * @return self
     * @param string $warningRPH
     */
    public function addToWarningRPH($warningRPH)
    {
        $this->warningRPH[] = $warningRPH;
        return $this;
    }

    /**
     * isset warningRPH
     *
     * This references the RPH found in the Warning element. Used to identify the warnings associated with this RoomStay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarningRPH($index)
    {
        return isset($this->warningRPH[$index]);
    }

    /**
     * unset warningRPH
     *
     * This references the RPH found in the Warning element. Used to identify the warnings associated with this RoomStay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarningRPH($index)
    {
        unset($this->warningRPH[$index]);
    }

    /**
     * Gets as warningRPH
     *
     * This references the RPH found in the Warning element. Used to identify the warnings associated with this RoomStay.
     *
     * @return string[]
     */
    public function getWarningRPH()
    {
        return $this->warningRPH;
    }

    /**
     * Sets a new warningRPH
     *
     * This references the RPH found in the Warning element. Used to identify the warnings associated with this RoomStay.
     *
     * @param string $warningRPH
     * @return self
     */
    public function setWarningRPH(array $warningRPH)
    {
        $this->warningRPH = $warningRPH;
        return $this;
    }

    /**
     * Gets as roomStayLanguage
     *
     * Language of the response for the RoomStay (property). Note that the requested language may not be available for all properties and so the language of the response for each property may vary.
     *
     * @return string
     */
    public function getRoomStayLanguage()
    {
        return $this->roomStayLanguage;
    }

    /**
     * Sets a new roomStayLanguage
     *
     * Language of the response for the RoomStay (property). Note that the requested language may not be available for all properties and so the language of the response for each property may vary.
     *
     * @param string $roomStayLanguage
     * @return self
     */
    public function setRoomStayLanguage($roomStayLanguage)
    {
        $this->roomStayLanguage = $roomStayLanguage;
        return $this;
    }

    /**
     * Gets as roomStayGroupID
     *
     * An ID of a group of rooms which must be booked together.
     *
     * @return string
     */
    public function getRoomStayGroupID()
    {
        return $this->roomStayGroupID;
    }

    /**
     * Sets a new roomStayGroupID
     *
     * An ID of a group of rooms which must be booked together.
     *
     * @param string $roomStayGroupID
     * @return self
     */
    public function setRoomStayGroupID($roomStayGroupID)
    {
        $this->roomStayGroupID = $roomStayGroupID;
        return $this;
    }

    /**
     * Adds as roomType
     *
     * A collection of Room Types associated with a particular Room Stay.
     * The RoomType element is used to contain all the room type information for a single RateType Code (ex A1K) for a given date range.
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomTypeType $roomType
     */
    public function addToRoomTypes(\Recranet\OTA\Type\RoomTypeType $roomType)
    {
        $this->roomTypes[] = $roomType;
        return $this;
    }

    /**
     * isset roomTypes
     *
     * A collection of Room Types associated with a particular Room Stay.
     * The RoomType element is used to contain all the room type information for a single RateType Code (ex A1K) for a given date range.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomTypes($index)
    {
        return isset($this->roomTypes[$index]);
    }

    /**
     * unset roomTypes
     *
     * A collection of Room Types associated with a particular Room Stay.
     * The RoomType element is used to contain all the room type information for a single RateType Code (ex A1K) for a given date range.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomTypes($index)
    {
        unset($this->roomTypes[$index]);
    }

    /**
     * Gets as roomTypes
     *
     * A collection of Room Types associated with a particular Room Stay.
     * The RoomType element is used to contain all the room type information for a single RateType Code (ex A1K) for a given date range.
     *
     * @return \Recranet\OTA\Type\RoomTypeType[]
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * A collection of Room Types associated with a particular Room Stay.
     * The RoomType element is used to contain all the room type information for a single RateType Code (ex A1K) for a given date range.
     *
     * @param \Recranet\OTA\Type\RoomTypeType[] $roomTypes
     * @return self
     */
    public function setRoomTypes(array $roomTypes = null)
    {
        $this->roomTypes = $roomTypes;
        return $this;
    }

    /**
     * Adds as ratePlan
     *
     * A collection of Rate Plans associated with a particular Room Stay.
     * The rate plan element is used to contain all the rate information for a single Rate Plan Code (ex RACK) for a given date range. A given Rate Plan may have variable rates, over the effective period of the Rate Plan, this is represented by the child element Rates.
     *
     * @return self
     * @param \Recranet\OTA\Type\RatePlanType $ratePlan
     */
    public function addToRatePlans(\Recranet\OTA\Type\RatePlanType $ratePlan)
    {
        $this->ratePlans[] = $ratePlan;
        return $this;
    }

    /**
     * isset ratePlans
     *
     * A collection of Rate Plans associated with a particular Room Stay.
     * The rate plan element is used to contain all the rate information for a single Rate Plan Code (ex RACK) for a given date range. A given Rate Plan may have variable rates, over the effective period of the Rate Plan, this is represented by the child element Rates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlans($index)
    {
        return isset($this->ratePlans[$index]);
    }

    /**
     * unset ratePlans
     *
     * A collection of Rate Plans associated with a particular Room Stay.
     * The rate plan element is used to contain all the rate information for a single Rate Plan Code (ex RACK) for a given date range. A given Rate Plan may have variable rates, over the effective period of the Rate Plan, this is represented by the child element Rates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlans($index)
    {
        unset($this->ratePlans[$index]);
    }

    /**
     * Gets as ratePlans
     *
     * A collection of Rate Plans associated with a particular Room Stay.
     * The rate plan element is used to contain all the rate information for a single Rate Plan Code (ex RACK) for a given date range. A given Rate Plan may have variable rates, over the effective period of the Rate Plan, this is represented by the child element Rates.
     *
     * @return \Recranet\OTA\Type\RatePlanType[]
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * A collection of Rate Plans associated with a particular Room Stay.
     * The rate plan element is used to contain all the rate information for a single Rate Plan Code (ex RACK) for a given date range. A given Rate Plan may have variable rates, over the effective period of the Rate Plan, this is represented by the child element Rates.
     *
     * @param \Recranet\OTA\Type\RatePlanType[] $ratePlans
     * @return self
     */
    public function setRatePlans(array $ratePlans = null)
    {
        $this->ratePlans = $ratePlans;
        return $this;
    }

    /**
     * Gets as roomRates
     *
     * A collection of Room Rates associated with a particular Room Stay. Each Room Rate combination can have multiple rates. Example King room, Rack rate plan, Monday through Thursday, weekday amount, Friday and Saturday, weekend amount.
     * The combination of a given Rate Plan and Room Type. This allows for support for systems where Rate Plans are child of Room Type as well as systems which Room Types are child of Rate Plans.
     *
     * @return \Recranet\OTA\Type\RoomStayType\RoomRatesAType
     */
    public function getRoomRates()
    {
        return $this->roomRates;
    }

    /**
     * Sets a new roomRates
     *
     * A collection of Room Rates associated with a particular Room Stay. Each Room Rate combination can have multiple rates. Example King room, Rack rate plan, Monday through Thursday, weekday amount, Friday and Saturday, weekend amount.
     * The combination of a given Rate Plan and Room Type. This allows for support for systems where Rate Plans are child of Room Type as well as systems which Room Types are child of Rate Plans.
     *
     * @param \Recranet\OTA\Type\RoomStayType\RoomRatesAType $roomRates
     * @return self
     */
    public function setRoomRates(?\Recranet\OTA\Type\RoomStayType\RoomRatesAType $roomRates = null)
    {
        $this->roomRates = $roomRates;
        return $this;
    }

    /**
     * Gets as guestCounts
     *
     * A collection of Guest Counts associated with Room Stay. A child Guest Count element is required for each distinct age group.
     *
     * @return \Recranet\OTA\Type\GuestCountType
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * A collection of Guest Counts associated with Room Stay. A child Guest Count element is required for each distinct age group.
     *
     * @param \Recranet\OTA\Type\GuestCountType $guestCounts
     * @return self
     */
    public function setGuestCounts(?\Recranet\OTA\Type\GuestCountType $guestCounts = null)
    {
        $this->guestCounts = $guestCounts;
        return $this;
    }

    /**
     * Gets as timeSpan
     *
     * The Time Span which covers the Room Stay.
     *
     * @return \Recranet\OTA\Type\DateTimeSpanType
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }

    /**
     * Sets a new timeSpan
     *
     * The Time Span which covers the Room Stay.
     *
     * @param \Recranet\OTA\Type\DateTimeSpanType $timeSpan
     * @return self
     */
    public function setTimeSpan(?\Recranet\OTA\Type\DateTimeSpanType $timeSpan = null)
    {
        $this->timeSpan = $timeSpan;
        return $this;
    }

    /**
     * Adds as guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @return self
     * @param \Recranet\OTA\Type\GuaranteeType $guarantee
     */
    public function addToGuarantee(\Recranet\OTA\Type\GuaranteeType $guarantee)
    {
        $this->guarantee[] = $guarantee;
        return $this;
    }

    /**
     * isset guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuarantee($index)
    {
        return isset($this->guarantee[$index]);
    }

    /**
     * unset guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuarantee($index)
    {
        unset($this->guarantee[$index]);
    }

    /**
     * Gets as guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @return \Recranet\OTA\Type\GuaranteeType[]
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param \Recranet\OTA\Type\GuaranteeType[] $guarantee
     * @return self
     */
    public function setGuarantee(array $guarantee = null)
    {
        $this->guarantee = $guarantee;
        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * A collection of deposit and/or payments for the Room Stay.
     *
     * @return self
     * @param \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
     */
    public function addToDepositPayments(\Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment)
    {
        $this->depositPayments[] = $guaranteePayment;
        return $this;
    }

    /**
     * isset depositPayments
     *
     * A collection of deposit and/or payments for the Room Stay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDepositPayments($index)
    {
        return isset($this->depositPayments[$index]);
    }

    /**
     * unset depositPayments
     *
     * A collection of deposit and/or payments for the Room Stay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDepositPayments($index)
    {
        unset($this->depositPayments[$index]);
    }

    /**
     * Gets as depositPayments
     *
     * A collection of deposit and/or payments for the Room Stay.
     *
     * @return \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getDepositPayments()
    {
        return $this->depositPayments;
    }

    /**
     * Sets a new depositPayments
     *
     * A collection of deposit and/or payments for the Room Stay.
     *
     * @param \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType[] $depositPayments
     * @return self
     */
    public function setDepositPayments(array $depositPayments = null)
    {
        $this->depositPayments = $depositPayments;
        return $this;
    }

    /**
     * Gets as cancelPenalties
     *
     * A collection of Cancellation Penalties objects for the Room Stay.
     *
     * @return \Recranet\OTA\Type\CancelPenaltiesType
     */
    public function getCancelPenalties()
    {
        return $this->cancelPenalties;
    }

    /**
     * Sets a new cancelPenalties
     *
     * A collection of Cancellation Penalties objects for the Room Stay.
     *
     * @param \Recranet\OTA\Type\CancelPenaltiesType $cancelPenalties
     * @return self
     */
    public function setCancelPenalties(?\Recranet\OTA\Type\CancelPenaltiesType $cancelPenalties = null)
    {
        $this->cancelPenalties = $cancelPenalties;
        return $this;
    }

    /**
     * Gets as discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount.
     *
     * @return \Recranet\OTA\Type\DiscountType
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount.
     *
     * @param \Recranet\OTA\Type\DiscountType $discount
     * @return self
     */
    public function setDiscount(?\Recranet\OTA\Type\DiscountType $discount = null)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Gets as total
     *
     * The total amount charged for the Room Stay including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
     *
     * @return \Recranet\OTA\Type\TotalType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The total amount charged for the Room Stay including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
     *
     * @param \Recranet\OTA\Type\TotalType $total
     * @return self
     */
    public function setTotal(?\Recranet\OTA\Type\TotalType $total = null)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Gets as basicPropertyInfo
     *
     * Property Information for the Room Stay.
     *
     * @return \Recranet\OTA\Type\RoomStayType\BasicPropertyInfoAType
     */
    public function getBasicPropertyInfo()
    {
        return $this->basicPropertyInfo;
    }

    /**
     * Sets a new basicPropertyInfo
     *
     * Property Information for the Room Stay.
     *
     * @param \Recranet\OTA\Type\RoomStayType\BasicPropertyInfoAType $basicPropertyInfo
     * @return self
     */
    public function setBasicPropertyInfo(?\Recranet\OTA\Type\RoomStayType\BasicPropertyInfoAType $basicPropertyInfo = null)
    {
        $this->basicPropertyInfo = $basicPropertyInfo;
        return $this;
    }

    /**
     * Gets as mapURL
     *
     * When requested, a link to a map is returned in the response which indicates the position of the matching hotel(s).
     *
     * @return \Recranet\OTA\Type\RoomStayType\MapURLAType
     */
    public function getMapURL()
    {
        return $this->mapURL;
    }

    /**
     * Sets a new mapURL
     *
     * When requested, a link to a map is returned in the response which indicates the position of the matching hotel(s).
     *
     * @param \Recranet\OTA\Type\RoomStayType\MapURLAType $mapURL
     * @return self
     */
    public function setMapURL(?\Recranet\OTA\Type\RoomStayType\MapURLAType $mapURL = null)
    {
        $this->mapURL = $mapURL;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

