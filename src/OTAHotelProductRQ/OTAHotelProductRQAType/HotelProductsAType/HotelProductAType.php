<?php

namespace Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType;

/**
 * Class representing HotelProductAType
 */
class HotelProductAType
{
    /**
     * Identifies the status of the product ( i.e. Active, Deactivate).
     *
     * @var string $productStatusType
     */
    private $productStatusType = null;

    /**
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
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
     * The IATA city code; for example DCA, ORD.
     *
     * @var string $hotelCityCode
     */
    private $hotelCityCode = null;

    /**
     * A text field used to communicate the proper name of the hotel.
     *
     * @var string $hotelName
     */
    private $hotelName = null;

    /**
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @var string $hotelCodeContext
     */
    private $hotelCodeContext = null;

    /**
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @var string $chainName
     */
    private $chainName = null;

    /**
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @var string $brandName
     */
    private $brandName = null;

    /**
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @var string $areaID
     */
    private $areaID = null;

    /**
     * TTI hotel reference code.
     * Example: 123
     * Note: This code is maintained by the Travel Technology Initiative (TTI) and provides a unique way to identify a property across a multiplicity of channels, service providers, tour companies, representation companies and third parties involved in the booking, administration and fulfillment of travel within the hospitality industry. For more information: http://www.tti.org/tticodes.html
     *
     * @var int $tTIcode
     */
    private $tTIcode = null;

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
     * A collection of room types.
     *
     * @var \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RoomTypesAType $roomTypes
     */
    private $roomTypes = null;

    /**
     * A collection of rate plans.
     *
     * @var \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RatePlansAType $ratePlans
     */
    private $ratePlans = null;

    /**
     * Value add inclustions for the product.
     *
     * @var \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\ValueAddInclusionsAType $valueAddInclusions
     */
    private $valueAddInclusions = null;

    /**
     * Policy information for the product or if no product is identified, policy information for the hotel.
     *
     * @var \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\PolicyInfoAType $policyInfo
     */
    private $policyInfo = null;

    /**
     * Contact information for the product.
     *
     * @var \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\ContactsAType $contacts
     */
    private $contacts = null;

    /**
     * Taxes that apply to the product.
     *
     * @var \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\TaxesAType $taxes
     */
    private $taxes = null;

    /**
     * Fees that apply to the product.
     *
     * @var \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\FeesAType $fees
     */
    private $fees = null;

    /**
     * A Container for the repeating description element.
     *
     * @var \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\DescriptionsAType $descriptions
     */
    private $descriptions = null;

    /**
     * A collection of charges related to additional guests.
     *
     * @var \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\AdditionalGuestAmountsAType $additionalGuestAmounts
     */
    private $additionalGuestAmounts = null;

    /**
     * Gets as productStatusType
     *
     * Identifies the status of the product ( i.e. Active, Deactivate).
     *
     * @return string
     */
    public function getProductStatusType()
    {
        return $this->productStatusType;
    }

    /**
     * Sets a new productStatusType
     *
     * Identifies the status of the product ( i.e. Active, Deactivate).
     *
     * @param string $productStatusType
     * @return self
     */
    public function setProductStatusType($productStatusType)
    {
        $this->productStatusType = $productStatusType;
        return $this;
    }

    /**
     * Gets as chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
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
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
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
     * Gets as hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @return string
     */
    public function getHotelCityCode()
    {
        return $this->hotelCityCode;
    }

    /**
     * Sets a new hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @param string $hotelCityCode
     * @return self
     */
    public function setHotelCityCode($hotelCityCode)
    {
        $this->hotelCityCode = $hotelCityCode;
        return $this;
    }

    /**
     * Gets as hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Sets a new hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @param string $hotelName
     * @return self
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;
        return $this;
    }

    /**
     * Gets as hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @return string
     */
    public function getHotelCodeContext()
    {
        return $this->hotelCodeContext;
    }

    /**
     * Sets a new hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @param string $hotelCodeContext
     * @return self
     */
    public function setHotelCodeContext($hotelCodeContext)
    {
        $this->hotelCodeContext = $hotelCodeContext;
        return $this;
    }

    /**
     * Gets as chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @return string
     */
    public function getChainName()
    {
        return $this->chainName;
    }

    /**
     * Sets a new chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @param string $chainName
     * @return self
     */
    public function setChainName($chainName)
    {
        $this->chainName = $chainName;
        return $this;
    }

    /**
     * Gets as brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @param string $brandName
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * Gets as areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @return string
     */
    public function getAreaID()
    {
        return $this->areaID;
    }

    /**
     * Sets a new areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @param string $areaID
     * @return self
     */
    public function setAreaID($areaID)
    {
        $this->areaID = $areaID;
        return $this;
    }

    /**
     * Gets as tTIcode
     *
     * TTI hotel reference code.
     * Example: 123
     * Note: This code is maintained by the Travel Technology Initiative (TTI) and provides a unique way to identify a property across a multiplicity of channels, service providers, tour companies, representation companies and third parties involved in the booking, administration and fulfillment of travel within the hospitality industry. For more information: http://www.tti.org/tticodes.html
     *
     * @return int
     */
    public function getTTIcode()
    {
        return $this->tTIcode;
    }

    /**
     * Sets a new tTIcode
     *
     * TTI hotel reference code.
     * Example: 123
     * Note: This code is maintained by the Travel Technology Initiative (TTI) and provides a unique way to identify a property across a multiplicity of channels, service providers, tour companies, representation companies and third parties involved in the booking, administration and fulfillment of travel within the hospitality industry. For more information: http://www.tti.org/tticodes.html
     *
     * @param int $tTIcode
     * @return self
     */
    public function setTTIcode($tTIcode)
    {
        $this->tTIcode = $tTIcode;
        return $this;
    }

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
     * Gets as roomTypes
     *
     * A collection of room types.
     *
     * @return \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RoomTypesAType
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * A collection of room types.
     *
     * @param \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RoomTypesAType $roomTypes
     * @return self
     */
    public function setRoomTypes(?\Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RoomTypesAType $roomTypes = null)
    {
        $this->roomTypes = $roomTypes;
        return $this;
    }

    /**
     * Gets as ratePlans
     *
     * A collection of rate plans.
     *
     * @return \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RatePlansAType
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * A collection of rate plans.
     *
     * @param \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RatePlansAType $ratePlans
     * @return self
     */
    public function setRatePlans(?\Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RatePlansAType $ratePlans = null)
    {
        $this->ratePlans = $ratePlans;
        return $this;
    }

    /**
     * Gets as valueAddInclusions
     *
     * Value add inclustions for the product.
     *
     * @return \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\ValueAddInclusionsAType
     */
    public function getValueAddInclusions()
    {
        return $this->valueAddInclusions;
    }

    /**
     * Sets a new valueAddInclusions
     *
     * Value add inclustions for the product.
     *
     * @param \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\ValueAddInclusionsAType $valueAddInclusions
     * @return self
     */
    public function setValueAddInclusions(?\Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\ValueAddInclusionsAType $valueAddInclusions = null)
    {
        $this->valueAddInclusions = $valueAddInclusions;
        return $this;
    }

    /**
     * Gets as policyInfo
     *
     * Policy information for the product or if no product is identified, policy information for the hotel.
     *
     * @return \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\PolicyInfoAType
     */
    public function getPolicyInfo()
    {
        return $this->policyInfo;
    }

    /**
     * Sets a new policyInfo
     *
     * Policy information for the product or if no product is identified, policy information for the hotel.
     *
     * @param \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\PolicyInfoAType $policyInfo
     * @return self
     */
    public function setPolicyInfo(?\Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\PolicyInfoAType $policyInfo = null)
    {
        $this->policyInfo = $policyInfo;
        return $this;
    }

    /**
     * Gets as contacts
     *
     * Contact information for the product.
     *
     * @return \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\ContactsAType
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * Contact information for the product.
     *
     * @param \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\ContactsAType $contacts
     * @return self
     */
    public function setContacts(?\Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\ContactsAType $contacts = null)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Gets as taxes
     *
     * Taxes that apply to the product.
     *
     * @return \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\TaxesAType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * Taxes that apply to the product.
     *
     * @param \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\TaxesAType $taxes
     * @return self
     */
    public function setTaxes(?\Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\TaxesAType $taxes = null)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Gets as fees
     *
     * Fees that apply to the product.
     *
     * @return \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\FeesAType
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * Fees that apply to the product.
     *
     * @param \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\FeesAType $fees
     * @return self
     */
    public function setFees(?\Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\FeesAType $fees = null)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as descriptions
     *
     * A Container for the repeating description element.
     *
     * @return \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\DescriptionsAType
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * A Container for the repeating description element.
     *
     * @param \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\DescriptionsAType $descriptions
     * @return self
     */
    public function setDescriptions(?\Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\DescriptionsAType $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    /**
     * Gets as additionalGuestAmounts
     *
     * A collection of charges related to additional guests.
     *
     * @return \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\AdditionalGuestAmountsAType
     */
    public function getAdditionalGuestAmounts()
    {
        return $this->additionalGuestAmounts;
    }

    /**
     * Sets a new additionalGuestAmounts
     *
     * A collection of charges related to additional guests.
     *
     * @param \Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\AdditionalGuestAmountsAType $additionalGuestAmounts
     * @return self
     */
    public function setAdditionalGuestAmounts(?\Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\AdditionalGuestAmountsAType $additionalGuestAmounts = null)
    {
        $this->additionalGuestAmounts = $additionalGuestAmounts;
        return $this;
    }
}

