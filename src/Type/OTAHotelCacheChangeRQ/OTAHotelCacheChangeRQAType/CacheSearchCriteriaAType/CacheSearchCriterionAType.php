<?php

namespace Recranet\OTA\Type\OTAHotelCacheChangeRQ\OTAHotelCacheChangeRQAType\CacheSearchCriteriaAType;

/**
 * Class representing CacheSearchCriterionAType
 */
class CacheSearchCriterionAType
{
    /**
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors.
     *
     * @var string $chainCode
     */
    private $chainCode = null;

    /**
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @var string $brandCode
     */
    private $brandCode = null;

    /**
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @var string $hotelCode
     */
    private $hotelCode = null;

    /**
     * Specific system room type code, ex: A1K, A1Q etc.
     *
     * @var string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * A code or identification number that identifies the room stay as part of a group, package tour, or block of rooms designated in the inventory.
     *
     * @var string $invBlockCode
     */
    private $invBlockCode = null;

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
     * The starting date/time for the cache results to be returned.
     *
     * @var \DateTime $cacheStartDateTime
     */
    private $cacheStartDateTime = null;

    /**
     * The ending date/time for the cache results to be returned. This is used in conjunction with the cacheStartDate to constrain the date range of the results.
     *
     * @var \DateTime $cacheEndDateTime
     */
    private $cacheEndDateTime = null;

    /**
     * Geographical and position-based cache search criteria.
     *
     * @var \Recranet\OTA\Type\OTAHotelCacheChangeRQ\OTAHotelCacheChangeRQAType\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType $geographicalInfo
     */
    private $geographicalInfo = null;

    /**
     * Gets as chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors.
     *
     * @return string
     */
    public function getChainCode()
    {
        return $this->chainCode;
    }

    /**
     * Sets a new chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors.
     *
     * @param string $chainCode
     * @return self
     */
    public function setChainCode($chainCode)
    {
        $this->chainCode = $chainCode;
        return $this;
    }

    /**
     * Gets as brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @return string
     */
    public function getBrandCode()
    {
        return $this->brandCode;
    }

    /**
     * Sets a new brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @param string $brandCode
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        $this->brandCode = $brandCode;
        return $this;
    }

    /**
     * Gets as hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @return string
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }

    /**
     * Sets a new hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @param string $hotelCode
     * @return self
     */
    public function setHotelCode($hotelCode)
    {
        $this->hotelCode = $hotelCode;
        return $this;
    }

    /**
     * Gets as roomTypeCode
     *
     * Specific system room type code, ex: A1K, A1Q etc.
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
     * Specific system room type code, ex: A1K, A1Q etc.
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
     * A code or identification number that identifies the room stay as part of a group, package tour, or block of rooms designated in the inventory.
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
     * A code or identification number that identifies the room stay as part of a group, package tour, or block of rooms designated in the inventory.
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
     * Gets as cacheStartDateTime
     *
     * The starting date/time for the cache results to be returned.
     *
     * @return \DateTime
     */
    public function getCacheStartDateTime()
    {
        return $this->cacheStartDateTime;
    }

    /**
     * Sets a new cacheStartDateTime
     *
     * The starting date/time for the cache results to be returned.
     *
     * @param \DateTime $cacheStartDateTime
     * @return self
     */
    public function setCacheStartDateTime(\DateTime $cacheStartDateTime)
    {
        $this->cacheStartDateTime = $cacheStartDateTime;
        return $this;
    }

    /**
     * Gets as cacheEndDateTime
     *
     * The ending date/time for the cache results to be returned. This is used in conjunction with the cacheStartDate to constrain the date range of the results.
     *
     * @return \DateTime
     */
    public function getCacheEndDateTime()
    {
        return $this->cacheEndDateTime;
    }

    /**
     * Sets a new cacheEndDateTime
     *
     * The ending date/time for the cache results to be returned. This is used in conjunction with the cacheStartDate to constrain the date range of the results.
     *
     * @param \DateTime $cacheEndDateTime
     * @return self
     */
    public function setCacheEndDateTime(\DateTime $cacheEndDateTime)
    {
        $this->cacheEndDateTime = $cacheEndDateTime;
        return $this;
    }

    /**
     * Gets as geographicalInfo
     *
     * Geographical and position-based cache search criteria.
     *
     * @return \Recranet\OTA\Type\OTAHotelCacheChangeRQ\OTAHotelCacheChangeRQAType\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType
     */
    public function getGeographicalInfo()
    {
        return $this->geographicalInfo;
    }

    /**
     * Sets a new geographicalInfo
     *
     * Geographical and position-based cache search criteria.
     *
     * @param \Recranet\OTA\Type\OTAHotelCacheChangeRQ\OTAHotelCacheChangeRQAType\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType $geographicalInfo
     * @return self
     */
    public function setGeographicalInfo(?\Recranet\OTA\Type\OTAHotelCacheChangeRQ\OTAHotelCacheChangeRQAType\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType $geographicalInfo = null)
    {
        $this->geographicalInfo = $geographicalInfo;
        return $this;
    }
}

