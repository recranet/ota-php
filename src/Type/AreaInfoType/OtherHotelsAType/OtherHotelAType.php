<?php

namespace Recranet\OTA\Type\AreaInfoType\OtherHotelsAType;

/**
 * Class representing OtherHotelAType
 */
class OtherHotelAType
{
    /**
     * When true, indicates this hotel is a competitor. When false, this hotel is not a competitor.
     *
     * @var bool $competitorIndicator
     */
    private $competitorIndicator = null;

    /**
     * Identifies the segment (e.g., luxury, upscale, extended stay) of the other hotel. Refer to OpenTravel Codelist SEG.
     *
     * @var string $segmentCategoryCode
     */
    private $segmentCategoryCode = null;

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
     * An ID as created by the source system (e.g. when passing competitor information, this would be the ID stored in the competitor's system).
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * An ID as created by the non-source system (e.g. when passing competitor information, this would be the ID stored in the local company's system).
     *
     * @var string $alternateID
     */
    private $alternateID = null;

    /**
     * Descriptive Content Reference ID.
     * Example: 1
     * Note: This descriptive content reference ID was defined elsewhere in this message
     * OpenTravel Best Practice: Using Reference Place Holders: The reference place holder (RPH) is a unique ID assigned to an instance in a collection of like items (e.g. used to assign a unique ID to each passenger in a list of passengers. When referencing an RPH, the same RPH type is used to identify the assigned unique ID in an element that references the item in a collection.
     *
     * @var string $hotelReferenceRPH
     */
    private $hotelReferenceRPH = null;

    /**
     * Provides general property information for another hotel.
     *
     * @var \Recranet\OTA\Type\ContactInfoRootType[] $contactInfos
     */
    private $contactInfos = null;

    /**
     * Provides information on the location of the other hotel.
     *
     * @var \Recranet\OTA\Type\RefPointsType\RefPointAType[] $refPoints
     */
    private $refPoints = null;

    /**
     * Gets as competitorIndicator
     *
     * When true, indicates this hotel is a competitor. When false, this hotel is not a competitor.
     *
     * @return bool
     */
    public function getCompetitorIndicator()
    {
        return $this->competitorIndicator;
    }

    /**
     * Sets a new competitorIndicator
     *
     * When true, indicates this hotel is a competitor. When false, this hotel is not a competitor.
     *
     * @param bool $competitorIndicator
     * @return self
     */
    public function setCompetitorIndicator($competitorIndicator)
    {
        $this->competitorIndicator = $competitorIndicator;
        return $this;
    }

    /**
     * Gets as segmentCategoryCode
     *
     * Identifies the segment (e.g., luxury, upscale, extended stay) of the other hotel. Refer to OpenTravel Codelist SEG.
     *
     * @return string
     */
    public function getSegmentCategoryCode()
    {
        return $this->segmentCategoryCode;
    }

    /**
     * Sets a new segmentCategoryCode
     *
     * Identifies the segment (e.g., luxury, upscale, extended stay) of the other hotel. Refer to OpenTravel Codelist SEG.
     *
     * @param string $segmentCategoryCode
     * @return self
     */
    public function setSegmentCategoryCode($segmentCategoryCode)
    {
        $this->segmentCategoryCode = $segmentCategoryCode;
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
     * Gets as iD
     *
     * An ID as created by the source system (e.g. when passing competitor information, this would be the ID stored in the competitor's system).
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * An ID as created by the source system (e.g. when passing competitor information, this would be the ID stored in the competitor's system).
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as alternateID
     *
     * An ID as created by the non-source system (e.g. when passing competitor information, this would be the ID stored in the local company's system).
     *
     * @return string
     */
    public function getAlternateID()
    {
        return $this->alternateID;
    }

    /**
     * Sets a new alternateID
     *
     * An ID as created by the non-source system (e.g. when passing competitor information, this would be the ID stored in the local company's system).
     *
     * @param string $alternateID
     * @return self
     */
    public function setAlternateID($alternateID)
    {
        $this->alternateID = $alternateID;
        return $this;
    }

    /**
     * Gets as hotelReferenceRPH
     *
     * Descriptive Content Reference ID.
     * Example: 1
     * Note: This descriptive content reference ID was defined elsewhere in this message
     * OpenTravel Best Practice: Using Reference Place Holders: The reference place holder (RPH) is a unique ID assigned to an instance in a collection of like items (e.g. used to assign a unique ID to each passenger in a list of passengers. When referencing an RPH, the same RPH type is used to identify the assigned unique ID in an element that references the item in a collection.
     *
     * @return string
     */
    public function getHotelReferenceRPH()
    {
        return $this->hotelReferenceRPH;
    }

    /**
     * Sets a new hotelReferenceRPH
     *
     * Descriptive Content Reference ID.
     * Example: 1
     * Note: This descriptive content reference ID was defined elsewhere in this message
     * OpenTravel Best Practice: Using Reference Place Holders: The reference place holder (RPH) is a unique ID assigned to an instance in a collection of like items (e.g. used to assign a unique ID to each passenger in a list of passengers. When referencing an RPH, the same RPH type is used to identify the assigned unique ID in an element that references the item in a collection.
     *
     * @param string $hotelReferenceRPH
     * @return self
     */
    public function setHotelReferenceRPH($hotelReferenceRPH)
    {
        $this->hotelReferenceRPH = $hotelReferenceRPH;
        return $this;
    }

    /**
     * Adds as contactInfo
     *
     * Provides general property information for another hotel.
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactInfoRootType $contactInfo
     */
    public function addToContactInfos(\Recranet\OTA\Type\ContactInfoRootType $contactInfo)
    {
        $this->contactInfos[] = $contactInfo;
        return $this;
    }

    /**
     * isset contactInfos
     *
     * Provides general property information for another hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactInfos($index)
    {
        return isset($this->contactInfos[$index]);
    }

    /**
     * unset contactInfos
     *
     * Provides general property information for another hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactInfos($index)
    {
        unset($this->contactInfos[$index]);
    }

    /**
     * Gets as contactInfos
     *
     * Provides general property information for another hotel.
     *
     * @return \Recranet\OTA\Type\ContactInfoRootType[]
     */
    public function getContactInfos()
    {
        return $this->contactInfos;
    }

    /**
     * Sets a new contactInfos
     *
     * Provides general property information for another hotel.
     *
     * @param \Recranet\OTA\Type\ContactInfoRootType[] $contactInfos
     * @return self
     */
    public function setContactInfos(array $contactInfos = null)
    {
        $this->contactInfos = $contactInfos;
        return $this;
    }

    /**
     * Adds as refPoint
     *
     * Provides information on the location of the other hotel.
     *
     * @return self
     * @param \Recranet\OTA\Type\RefPointsType\RefPointAType $refPoint
     */
    public function addToRefPoints(\Recranet\OTA\Type\RefPointsType\RefPointAType $refPoint)
    {
        $this->refPoints[] = $refPoint;
        return $this;
    }

    /**
     * isset refPoints
     *
     * Provides information on the location of the other hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefPoints($index)
    {
        return isset($this->refPoints[$index]);
    }

    /**
     * unset refPoints
     *
     * Provides information on the location of the other hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefPoints($index)
    {
        unset($this->refPoints[$index]);
    }

    /**
     * Gets as refPoints
     *
     * Provides information on the location of the other hotel.
     *
     * @return \Recranet\OTA\Type\RefPointsType\RefPointAType[]
     */
    public function getRefPoints()
    {
        return $this->refPoints;
    }

    /**
     * Sets a new refPoints
     *
     * Provides information on the location of the other hotel.
     *
     * @param \Recranet\OTA\Type\RefPointsType\RefPointAType[] $refPoints
     * @return self
     */
    public function setRefPoints(array $refPoints = null)
    {
        $this->refPoints = $refPoints;
        return $this;
    }
}

