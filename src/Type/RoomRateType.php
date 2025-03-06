<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RoomRateType
 *
 * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
 * XSD Type: RoomRateType
 */
class RoomRateType
{
    /**
     * This is used to indicate the item booked and is primarily used to exchange information with GDSs.
     *
     * @var string $bookingCode
     */
    private $bookingCode = null;

    /**
     * Indicates the starting date.
     *
     * @var \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @var \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @var bool $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * Specfic system room type code, ex: A1K, A1Q etc.
     *
     * @var string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * Code that identifies an inventory block.
     *
     * @var string $invBlockCode
     */
    private $invBlockCode = null;

    /**
     * The number of rooms.
     *
     * @var int $numberOfUnits
     */
    private $numberOfUnits = null;

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
     * Used to specify an availability status for the room rate.
     *
     * @var string $availabilityStatus
     */
    private $availabilityStatus = null;

    /**
     * A string value representing the unique identification of a room.
     *
     * @var string $roomID
     */
    private $roomID = null;

    /**
     * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
     *
     * @var \Recranet\OTA\Type\RateType\RateAType[] $rates
     */
    private $rates = null;

    /**
     * The description or name of a room rate.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $roomRateDescription
     */
    private $roomRateDescription = [
        
    ];

    /**
     * A collection of features that are made available as part of this speciific room and this specifiic rate plan.
     *
     * @var \Recranet\OTA\Type\RoomRateType\FeaturesAType\FeatureAType[] $features
     */
    private $features = null;

    /**
     * The total of all rates for this room rate type.
     *
     * @var \Recranet\OTA\Type\TotalType $total
     */
    private $total = null;

    /**
     * Provides information on the availability of the room rate.
     *
     * @var \Recranet\OTA\Type\RoomRateType\AvailabilityAType[] $availability
     */
    private $availability = [
        
    ];

    /**
     * Gets as bookingCode
     *
     * This is used to indicate the item booked and is primarily used to exchange information with GDSs.
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
     * This is used to indicate the item booked and is primarily used to exchange information with GDSs.
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
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return bool
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param bool $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;
        return $this;
    }

    /**
     * Gets as roomTypeCode
     *
     * Specfic system room type code, ex: A1K, A1Q etc.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * Specfic system room type code, ex: A1K, A1Q etc.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;
        return $this;
    }

    /**
     * Gets as invBlockCode
     *
     * Code that identifies an inventory block.
     *
     * @return string
     */
    public function getInvBlockCode()
    {
        return $this->invBlockCode;
    }

    /**
     * Sets a new invBlockCode
     *
     * Code that identifies an inventory block.
     *
     * @param string $invBlockCode
     * @return self
     */
    public function setInvBlockCode($invBlockCode)
    {
        $this->invBlockCode = $invBlockCode;
        return $this;
    }

    /**
     * Gets as numberOfUnits
     *
     * The number of rooms.
     *
     * @return int
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * The number of rooms.
     *
     * @param int $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;
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
     * Gets as availabilityStatus
     *
     * Used to specify an availability status for the room rate.
     *
     * @return string
     */
    public function getAvailabilityStatus()
    {
        return $this->availabilityStatus;
    }

    /**
     * Sets a new availabilityStatus
     *
     * Used to specify an availability status for the room rate.
     *
     * @param string $availabilityStatus
     * @return self
     */
    public function setAvailabilityStatus($availabilityStatus)
    {
        $this->availabilityStatus = $availabilityStatus;
        return $this;
    }

    /**
     * Gets as roomID
     *
     * A string value representing the unique identification of a room.
     *
     * @return string
     */
    public function getRoomID()
    {
        return $this->roomID;
    }

    /**
     * Sets a new roomID
     *
     * A string value representing the unique identification of a room.
     *
     * @param string $roomID
     * @return self
     */
    public function setRoomID($roomID)
    {
        $this->roomID = $roomID;
        return $this;
    }

    /**
     * Adds as rate
     *
     * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
     *
     * @return self
     * @param \Recranet\OTA\Type\RateType\RateAType $rate
     */
    public function addToRates(\Recranet\OTA\Type\RateType\RateAType $rate)
    {
        $this->rates[] = $rate;
        return $this;
    }

    /**
     * isset rates
     *
     * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
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
     * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
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
     * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
     *
     * @return \Recranet\OTA\Type\RateType\RateAType[]
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * Sets a new rates
     *
     * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
     *
     * @param \Recranet\OTA\Type\RateType\RateAType[] $rates
     * @return self
     */
    public function setRates(array $rates = null)
    {
        $this->rates = $rates;
        return $this;
    }

    /**
     * Adds as roomRateDescription
     *
     * The description or name of a room rate.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $roomRateDescription
     */
    public function addToRoomRateDescription(\Recranet\OTA\Type\ParagraphType $roomRateDescription)
    {
        $this->roomRateDescription[] = $roomRateDescription;
        return $this;
    }

    /**
     * isset roomRateDescription
     *
     * The description or name of a room rate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomRateDescription($index)
    {
        return isset($this->roomRateDescription[$index]);
    }

    /**
     * unset roomRateDescription
     *
     * The description or name of a room rate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomRateDescription($index)
    {
        unset($this->roomRateDescription[$index]);
    }

    /**
     * Gets as roomRateDescription
     *
     * The description or name of a room rate.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getRoomRateDescription()
    {
        return $this->roomRateDescription;
    }

    /**
     * Sets a new roomRateDescription
     *
     * The description or name of a room rate.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $roomRateDescription
     * @return self
     */
    public function setRoomRateDescription(array $roomRateDescription = null)
    {
        $this->roomRateDescription = $roomRateDescription;
        return $this;
    }

    /**
     * Adds as feature
     *
     * A collection of features that are made available as part of this speciific room and this specifiic rate plan.
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomRateType\FeaturesAType\FeatureAType $feature
     */
    public function addToFeatures(\Recranet\OTA\Type\RoomRateType\FeaturesAType\FeatureAType $feature)
    {
        $this->features[] = $feature;
        return $this;
    }

    /**
     * isset features
     *
     * A collection of features that are made available as part of this speciific room and this specifiic rate plan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeatures($index)
    {
        return isset($this->features[$index]);
    }

    /**
     * unset features
     *
     * A collection of features that are made available as part of this speciific room and this specifiic rate plan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeatures($index)
    {
        unset($this->features[$index]);
    }

    /**
     * Gets as features
     *
     * A collection of features that are made available as part of this speciific room and this specifiic rate plan.
     *
     * @return \Recranet\OTA\Type\RoomRateType\FeaturesAType\FeatureAType[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * A collection of features that are made available as part of this speciific room and this specifiic rate plan.
     *
     * @param \Recranet\OTA\Type\RoomRateType\FeaturesAType\FeatureAType[] $features
     * @return self
     */
    public function setFeatures(array $features = null)
    {
        $this->features = $features;
        return $this;
    }

    /**
     * Gets as total
     *
     * The total of all rates for this room rate type.
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
     * The total of all rates for this room rate type.
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
     * Adds as availability
     *
     * Provides information on the availability of the room rate.
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomRateType\AvailabilityAType $availability
     */
    public function addToAvailability(\Recranet\OTA\Type\RoomRateType\AvailabilityAType $availability)
    {
        $this->availability[] = $availability;
        return $this;
    }

    /**
     * isset availability
     *
     * Provides information on the availability of the room rate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailability($index)
    {
        return isset($this->availability[$index]);
    }

    /**
     * unset availability
     *
     * Provides information on the availability of the room rate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailability($index)
    {
        unset($this->availability[$index]);
    }

    /**
     * Gets as availability
     *
     * Provides information on the availability of the room rate.
     *
     * @return \Recranet\OTA\Type\RoomRateType\AvailabilityAType[]
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * Provides information on the availability of the room rate.
     *
     * @param \Recranet\OTA\Type\RoomRateType\AvailabilityAType[] $availability
     * @return self
     */
    public function setAvailability(array $availability = null)
    {
        $this->availability = $availability;
        return $this;
    }
}

