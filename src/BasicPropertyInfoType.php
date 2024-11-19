<?php

namespace Recranet\OTA;

/**
 * Class representing BasicPropertyInfoType
 *
 * An abbreviated short summary of hotel descriptive information.
 * XSD Type: BasicPropertyInfoType
 */
class BasicPropertyInfoType
{
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
     * Identifies the segment (e.g., luxury, upscale, extended stay) of the hotel. Refer to OpenTravel Codelist Segment Category Code (SEG).
     *
     * @var string $hotelSegmentCategoryCode
     */
    private $hotelSegmentCategoryCode = null;

    /**
     * The level of integration of a property to provide automated transaction information. The lower the number, the higher the integration (e.g., a 1 means the supplier has the highest level of integration automation).
     *
     * @var int $supplierIntegrationLevel
     */
    private $supplierIntegrationLevel = null;

    /**
     * Provides the maximum number of rooms that can be booked in a property for a group.
     *
     * @var int $maxGroupRoomQuantity
     */
    private $maxGroupRoomQuantity = null;

    /**
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute. Use it in conjunction with the chain code to determine the actual chain code that is used between trading partners.
     *
     * @var string $masterChainCode
     */
    private $masterChainCode = null;

    /**
     * A collection of VenderMessages.
     *
     * @var \Recranet\OTA\VendorMessageType[] $vendorMessages
     */
    private $vendorMessages = null;

    /**
     * An element that identifies the geographic position of the hotel. The Position element uses the representation defined by ISO Standard 6709 to define a geographic point location.
     *
     * @var \Recranet\OTA\BasicPropertyInfoType\PositionAType $position
     */
    private $position = null;

    /**
     * Public address of the hotel property.
     *
     * @var \Recranet\OTA\AddressInfoType $address
     */
    private $address = null;

    /**
     * Collection of hotel contact numbers.
     *
     * @var \Recranet\OTA\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType[] $contactNumbers
     */
    private $contactNumbers = null;

    /**
     * An element that identifies the hotel ratings.
     *
     * @var \Recranet\OTA\BasicPropertyInfoType\AwardAType[] $award
     */
    private $award = [
        
    ];

    /**
     * Describes the location of the property and available to/from transportation methods.
     *
     * @var \Recranet\OTA\RelativePositionType $relativePosition
     */
    private $relativePosition = null;

    /**
     * Hotel-level amenities (pool, etc) for searching.
     *
     * @var \Recranet\OTA\BasicPropertyInfoType\HotelAmenityAType[] $hotelAmenity
     */
    private $hotelAmenity = [
        
    ];

    /**
     * Identifies features of a property.
     *
     * @var \Recranet\OTA\BasicPropertyInfoType\HotelFeatureAType[] $hotelFeature
     */
    private $hotelFeature = [
        
    ];

    /**
     * Identifies recreation facilities or amenities of interest.
     *
     * @var \Recranet\OTA\BasicPropertyInfoType\RecreationAType[] $recreation
     */
    private $recreation = [
        
    ];

    /**
     * Identifies business services of interest.
     *
     * @var \Recranet\OTA\BasicPropertyInfoType\ServiceAType[] $service
     */
    private $service = [
        
    ];

    /**
     * Policy information for this hotel.
     *
     * @var \Recranet\OTA\BasicPropertyInfoType\PolicyAType $policy
     */
    private $policy = null;

    /**
     * Identifies hotel meeting facility information for a property.
     *
     * @var \Recranet\OTA\BasicPropertyInfoType\HotelMeetingFacilityAType[] $hotelMeetingFacility
     */
    private $hotelMeetingFacility = [
        
    ];

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
     * Gets as hotelSegmentCategoryCode
     *
     * Identifies the segment (e.g., luxury, upscale, extended stay) of the hotel. Refer to OpenTravel Codelist Segment Category Code (SEG).
     *
     * @return string
     */
    public function getHotelSegmentCategoryCode()
    {
        return $this->hotelSegmentCategoryCode;
    }

    /**
     * Sets a new hotelSegmentCategoryCode
     *
     * Identifies the segment (e.g., luxury, upscale, extended stay) of the hotel. Refer to OpenTravel Codelist Segment Category Code (SEG).
     *
     * @param string $hotelSegmentCategoryCode
     * @return self
     */
    public function setHotelSegmentCategoryCode($hotelSegmentCategoryCode)
    {
        $this->hotelSegmentCategoryCode = $hotelSegmentCategoryCode;
        return $this;
    }

    /**
     * Gets as supplierIntegrationLevel
     *
     * The level of integration of a property to provide automated transaction information. The lower the number, the higher the integration (e.g., a 1 means the supplier has the highest level of integration automation).
     *
     * @return int
     */
    public function getSupplierIntegrationLevel()
    {
        return $this->supplierIntegrationLevel;
    }

    /**
     * Sets a new supplierIntegrationLevel
     *
     * The level of integration of a property to provide automated transaction information. The lower the number, the higher the integration (e.g., a 1 means the supplier has the highest level of integration automation).
     *
     * @param int $supplierIntegrationLevel
     * @return self
     */
    public function setSupplierIntegrationLevel($supplierIntegrationLevel)
    {
        $this->supplierIntegrationLevel = $supplierIntegrationLevel;
        return $this;
    }

    /**
     * Gets as maxGroupRoomQuantity
     *
     * Provides the maximum number of rooms that can be booked in a property for a group.
     *
     * @return int
     */
    public function getMaxGroupRoomQuantity()
    {
        return $this->maxGroupRoomQuantity;
    }

    /**
     * Sets a new maxGroupRoomQuantity
     *
     * Provides the maximum number of rooms that can be booked in a property for a group.
     *
     * @param int $maxGroupRoomQuantity
     * @return self
     */
    public function setMaxGroupRoomQuantity($maxGroupRoomQuantity)
    {
        $this->maxGroupRoomQuantity = $maxGroupRoomQuantity;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
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
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
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
     * Gets as masterChainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute. Use it in conjunction with the chain code to determine the actual chain code that is used between trading partners.
     *
     * @return string
     */
    public function getMasterChainCode()
    {
        return $this->masterChainCode;
    }

    /**
     * Sets a new masterChainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute. Use it in conjunction with the chain code to determine the actual chain code that is used between trading partners.
     *
     * @param string $masterChainCode
     * @return self
     */
    public function setMasterChainCode($masterChainCode)
    {
        $this->masterChainCode = $masterChainCode;
        return $this;
    }

    /**
     * Adds as vendorMessage
     *
     * A collection of VenderMessages.
     *
     * @return self
     * @param \Recranet\OTA\VendorMessageType $vendorMessage
     */
    public function addToVendorMessages(\Recranet\OTA\VendorMessageType $vendorMessage)
    {
        $this->vendorMessages[] = $vendorMessage;
        return $this;
    }

    /**
     * isset vendorMessages
     *
     * A collection of VenderMessages.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendorMessages($index)
    {
        return isset($this->vendorMessages[$index]);
    }

    /**
     * unset vendorMessages
     *
     * A collection of VenderMessages.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendorMessages($index)
    {
        unset($this->vendorMessages[$index]);
    }

    /**
     * Gets as vendorMessages
     *
     * A collection of VenderMessages.
     *
     * @return \Recranet\OTA\VendorMessageType[]
     */
    public function getVendorMessages()
    {
        return $this->vendorMessages;
    }

    /**
     * Sets a new vendorMessages
     *
     * A collection of VenderMessages.
     *
     * @param \Recranet\OTA\VendorMessageType[] $vendorMessages
     * @return self
     */
    public function setVendorMessages(array $vendorMessages = null)
    {
        $this->vendorMessages = $vendorMessages;
        return $this;
    }

    /**
     * Gets as position
     *
     * An element that identifies the geographic position of the hotel. The Position element uses the representation defined by ISO Standard 6709 to define a geographic point location.
     *
     * @return \Recranet\OTA\BasicPropertyInfoType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * An element that identifies the geographic position of the hotel. The Position element uses the representation defined by ISO Standard 6709 to define a geographic point location.
     *
     * @param \Recranet\OTA\BasicPropertyInfoType\PositionAType $position
     * @return self
     */
    public function setPosition(?\Recranet\OTA\BasicPropertyInfoType\PositionAType $position = null)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as address
     *
     * Public address of the hotel property.
     *
     * @return \Recranet\OTA\AddressInfoType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Public address of the hotel property.
     *
     * @param \Recranet\OTA\AddressInfoType $address
     * @return self
     */
    public function setAddress(?\Recranet\OTA\AddressInfoType $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as contactNumber
     *
     * Collection of hotel contact numbers.
     *
     * @return self
     * @param \Recranet\OTA\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType $contactNumber
     */
    public function addToContactNumbers(\Recranet\OTA\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType $contactNumber)
    {
        $this->contactNumbers[] = $contactNumber;
        return $this;
    }

    /**
     * isset contactNumbers
     *
     * Collection of hotel contact numbers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactNumbers($index)
    {
        return isset($this->contactNumbers[$index]);
    }

    /**
     * unset contactNumbers
     *
     * Collection of hotel contact numbers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactNumbers($index)
    {
        unset($this->contactNumbers[$index]);
    }

    /**
     * Gets as contactNumbers
     *
     * Collection of hotel contact numbers.
     *
     * @return \Recranet\OTA\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType[]
     */
    public function getContactNumbers()
    {
        return $this->contactNumbers;
    }

    /**
     * Sets a new contactNumbers
     *
     * Collection of hotel contact numbers.
     *
     * @param \Recranet\OTA\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType[] $contactNumbers
     * @return self
     */
    public function setContactNumbers(array $contactNumbers = null)
    {
        $this->contactNumbers = $contactNumbers;
        return $this;
    }

    /**
     * Adds as award
     *
     * An element that identifies the hotel ratings.
     *
     * @return self
     * @param \Recranet\OTA\BasicPropertyInfoType\AwardAType $award
     */
    public function addToAward(\Recranet\OTA\BasicPropertyInfoType\AwardAType $award)
    {
        $this->award[] = $award;
        return $this;
    }

    /**
     * isset award
     *
     * An element that identifies the hotel ratings.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAward($index)
    {
        return isset($this->award[$index]);
    }

    /**
     * unset award
     *
     * An element that identifies the hotel ratings.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAward($index)
    {
        unset($this->award[$index]);
    }

    /**
     * Gets as award
     *
     * An element that identifies the hotel ratings.
     *
     * @return \Recranet\OTA\BasicPropertyInfoType\AwardAType[]
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * Sets a new award
     *
     * An element that identifies the hotel ratings.
     *
     * @param \Recranet\OTA\BasicPropertyInfoType\AwardAType[] $award
     * @return self
     */
    public function setAward(array $award = null)
    {
        $this->award = $award;
        return $this;
    }

    /**
     * Gets as relativePosition
     *
     * Describes the location of the property and available to/from transportation methods.
     *
     * @return \Recranet\OTA\RelativePositionType
     */
    public function getRelativePosition()
    {
        return $this->relativePosition;
    }

    /**
     * Sets a new relativePosition
     *
     * Describes the location of the property and available to/from transportation methods.
     *
     * @param \Recranet\OTA\RelativePositionType $relativePosition
     * @return self
     */
    public function setRelativePosition(?\Recranet\OTA\RelativePositionType $relativePosition = null)
    {
        $this->relativePosition = $relativePosition;
        return $this;
    }

    /**
     * Adds as hotelAmenity
     *
     * Hotel-level amenities (pool, etc) for searching.
     *
     * @return self
     * @param \Recranet\OTA\BasicPropertyInfoType\HotelAmenityAType $hotelAmenity
     */
    public function addToHotelAmenity(\Recranet\OTA\BasicPropertyInfoType\HotelAmenityAType $hotelAmenity)
    {
        $this->hotelAmenity[] = $hotelAmenity;
        return $this;
    }

    /**
     * isset hotelAmenity
     *
     * Hotel-level amenities (pool, etc) for searching.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelAmenity($index)
    {
        return isset($this->hotelAmenity[$index]);
    }

    /**
     * unset hotelAmenity
     *
     * Hotel-level amenities (pool, etc) for searching.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelAmenity($index)
    {
        unset($this->hotelAmenity[$index]);
    }

    /**
     * Gets as hotelAmenity
     *
     * Hotel-level amenities (pool, etc) for searching.
     *
     * @return \Recranet\OTA\BasicPropertyInfoType\HotelAmenityAType[]
     */
    public function getHotelAmenity()
    {
        return $this->hotelAmenity;
    }

    /**
     * Sets a new hotelAmenity
     *
     * Hotel-level amenities (pool, etc) for searching.
     *
     * @param \Recranet\OTA\BasicPropertyInfoType\HotelAmenityAType[] $hotelAmenity
     * @return self
     */
    public function setHotelAmenity(array $hotelAmenity = null)
    {
        $this->hotelAmenity = $hotelAmenity;
        return $this;
    }

    /**
     * Adds as hotelFeature
     *
     * Identifies features of a property.
     *
     * @return self
     * @param \Recranet\OTA\BasicPropertyInfoType\HotelFeatureAType $hotelFeature
     */
    public function addToHotelFeature(\Recranet\OTA\BasicPropertyInfoType\HotelFeatureAType $hotelFeature)
    {
        $this->hotelFeature[] = $hotelFeature;
        return $this;
    }

    /**
     * isset hotelFeature
     *
     * Identifies features of a property.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelFeature($index)
    {
        return isset($this->hotelFeature[$index]);
    }

    /**
     * unset hotelFeature
     *
     * Identifies features of a property.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelFeature($index)
    {
        unset($this->hotelFeature[$index]);
    }

    /**
     * Gets as hotelFeature
     *
     * Identifies features of a property.
     *
     * @return \Recranet\OTA\BasicPropertyInfoType\HotelFeatureAType[]
     */
    public function getHotelFeature()
    {
        return $this->hotelFeature;
    }

    /**
     * Sets a new hotelFeature
     *
     * Identifies features of a property.
     *
     * @param \Recranet\OTA\BasicPropertyInfoType\HotelFeatureAType[] $hotelFeature
     * @return self
     */
    public function setHotelFeature(array $hotelFeature = null)
    {
        $this->hotelFeature = $hotelFeature;
        return $this;
    }

    /**
     * Adds as recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @return self
     * @param \Recranet\OTA\BasicPropertyInfoType\RecreationAType $recreation
     */
    public function addToRecreation(\Recranet\OTA\BasicPropertyInfoType\RecreationAType $recreation)
    {
        $this->recreation[] = $recreation;
        return $this;
    }

    /**
     * isset recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecreation($index)
    {
        return isset($this->recreation[$index]);
    }

    /**
     * unset recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecreation($index)
    {
        unset($this->recreation[$index]);
    }

    /**
     * Gets as recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @return \Recranet\OTA\BasicPropertyInfoType\RecreationAType[]
     */
    public function getRecreation()
    {
        return $this->recreation;
    }

    /**
     * Sets a new recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param \Recranet\OTA\BasicPropertyInfoType\RecreationAType[] $recreation
     * @return self
     */
    public function setRecreation(array $recreation = null)
    {
        $this->recreation = $recreation;
        return $this;
    }

    /**
     * Adds as service
     *
     * Identifies business services of interest.
     *
     * @return self
     * @param \Recranet\OTA\BasicPropertyInfoType\ServiceAType $service
     */
    public function addToService(\Recranet\OTA\BasicPropertyInfoType\ServiceAType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * Identifies business services of interest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Identifies business services of interest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Identifies business services of interest.
     *
     * @return \Recranet\OTA\BasicPropertyInfoType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Identifies business services of interest.
     *
     * @param \Recranet\OTA\BasicPropertyInfoType\ServiceAType[] $service
     * @return self
     */
    public function setService(array $service = null)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Gets as policy
     *
     * Policy information for this hotel.
     *
     * @return \Recranet\OTA\BasicPropertyInfoType\PolicyAType
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * Policy information for this hotel.
     *
     * @param \Recranet\OTA\BasicPropertyInfoType\PolicyAType $policy
     * @return self
     */
    public function setPolicy(?\Recranet\OTA\BasicPropertyInfoType\PolicyAType $policy = null)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * Adds as hotelMeetingFacility
     *
     * Identifies hotel meeting facility information for a property.
     *
     * @return self
     * @param \Recranet\OTA\BasicPropertyInfoType\HotelMeetingFacilityAType $hotelMeetingFacility
     */
    public function addToHotelMeetingFacility(\Recranet\OTA\BasicPropertyInfoType\HotelMeetingFacilityAType $hotelMeetingFacility)
    {
        $this->hotelMeetingFacility[] = $hotelMeetingFacility;
        return $this;
    }

    /**
     * isset hotelMeetingFacility
     *
     * Identifies hotel meeting facility information for a property.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelMeetingFacility($index)
    {
        return isset($this->hotelMeetingFacility[$index]);
    }

    /**
     * unset hotelMeetingFacility
     *
     * Identifies hotel meeting facility information for a property.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelMeetingFacility($index)
    {
        unset($this->hotelMeetingFacility[$index]);
    }

    /**
     * Gets as hotelMeetingFacility
     *
     * Identifies hotel meeting facility information for a property.
     *
     * @return \Recranet\OTA\BasicPropertyInfoType\HotelMeetingFacilityAType[]
     */
    public function getHotelMeetingFacility()
    {
        return $this->hotelMeetingFacility;
    }

    /**
     * Sets a new hotelMeetingFacility
     *
     * Identifies hotel meeting facility information for a property.
     *
     * @param \Recranet\OTA\BasicPropertyInfoType\HotelMeetingFacilityAType[] $hotelMeetingFacility
     * @return self
     */
    public function setHotelMeetingFacility(array $hotelMeetingFacility = null)
    {
        $this->hotelMeetingFacility = $hotelMeetingFacility;
        return $this;
    }
}

