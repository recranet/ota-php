<?php

namespace Recranet\OTA\Type;

/**
 * Class representing HotelDescriptiveInfoRequestType
 *
 * The HotelDescriptiveInfo element contains the descriptive information about a hotel property.
 * XSD Type: HotelDescriptiveInfoRequestType
 */
class HotelDescriptiveInfoRequestType
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
     * Is used to indicate whether hotel information is being requested.
     *
     * @var \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\HotelInfoAType $hotelInfo
     */
    private $hotelInfo = null;

    /**
     * Is used to the indicate the specific facility information being requested.
     *
     * @var \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\FacilityInfoAType $facilityInfo
     */
    private $facilityInfo = null;

    /**
     * Is used to the indicate whether policy information is being requested.
     *
     * @var \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\PoliciesAType $policies
     */
    private $policies = null;

    /**
     * Is used to the indicate the specific area information being requested.
     *
     * @var \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\AreaInfoAType $areaInfo
     */
    private $areaInfo = null;

    /**
     * Is used to the indicate the specific affiliation information being requested.
     *
     * @var \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\AffiliationInfoAType $affiliationInfo
     */
    private $affiliationInfo = null;

    /**
     * Is used to the indicate whether contact information is being requested.
     *
     * @var \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\ContactInfoAType $contactInfo
     */
    private $contactInfo = null;

    /**
     * Is used to the indicate whether multimedia information is being requested.
     *
     * @var \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\MultimediaObjectsAType $multimediaObjects
     */
    private $multimediaObjects = null;

    /**
     * Container for specific information.
     *
     * @var \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType[] $contentInfos
     */
    private $contentInfos = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Gets as hotelInfo
     *
     * Is used to indicate whether hotel information is being requested.
     *
     * @return \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\HotelInfoAType
     */
    public function getHotelInfo()
    {
        return $this->hotelInfo;
    }

    /**
     * Sets a new hotelInfo
     *
     * Is used to indicate whether hotel information is being requested.
     *
     * @param \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\HotelInfoAType $hotelInfo
     * @return self
     */
    public function setHotelInfo(?\Recranet\OTA\Type\HotelDescriptiveInfoRequestType\HotelInfoAType $hotelInfo = null)
    {
        $this->hotelInfo = $hotelInfo;
        return $this;
    }

    /**
     * Gets as facilityInfo
     *
     * Is used to the indicate the specific facility information being requested.
     *
     * @return \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\FacilityInfoAType
     */
    public function getFacilityInfo()
    {
        return $this->facilityInfo;
    }

    /**
     * Sets a new facilityInfo
     *
     * Is used to the indicate the specific facility information being requested.
     *
     * @param \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\FacilityInfoAType $facilityInfo
     * @return self
     */
    public function setFacilityInfo(?\Recranet\OTA\Type\HotelDescriptiveInfoRequestType\FacilityInfoAType $facilityInfo = null)
    {
        $this->facilityInfo = $facilityInfo;
        return $this;
    }

    /**
     * Gets as policies
     *
     * Is used to the indicate whether policy information is being requested.
     *
     * @return \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\PoliciesAType
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    /**
     * Sets a new policies
     *
     * Is used to the indicate whether policy information is being requested.
     *
     * @param \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\PoliciesAType $policies
     * @return self
     */
    public function setPolicies(?\Recranet\OTA\Type\HotelDescriptiveInfoRequestType\PoliciesAType $policies = null)
    {
        $this->policies = $policies;
        return $this;
    }

    /**
     * Gets as areaInfo
     *
     * Is used to the indicate the specific area information being requested.
     *
     * @return \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\AreaInfoAType
     */
    public function getAreaInfo()
    {
        return $this->areaInfo;
    }

    /**
     * Sets a new areaInfo
     *
     * Is used to the indicate the specific area information being requested.
     *
     * @param \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\AreaInfoAType $areaInfo
     * @return self
     */
    public function setAreaInfo(?\Recranet\OTA\Type\HotelDescriptiveInfoRequestType\AreaInfoAType $areaInfo = null)
    {
        $this->areaInfo = $areaInfo;
        return $this;
    }

    /**
     * Gets as affiliationInfo
     *
     * Is used to the indicate the specific affiliation information being requested.
     *
     * @return \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\AffiliationInfoAType
     */
    public function getAffiliationInfo()
    {
        return $this->affiliationInfo;
    }

    /**
     * Sets a new affiliationInfo
     *
     * Is used to the indicate the specific affiliation information being requested.
     *
     * @param \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\AffiliationInfoAType $affiliationInfo
     * @return self
     */
    public function setAffiliationInfo(?\Recranet\OTA\Type\HotelDescriptiveInfoRequestType\AffiliationInfoAType $affiliationInfo = null)
    {
        $this->affiliationInfo = $affiliationInfo;
        return $this;
    }

    /**
     * Gets as contactInfo
     *
     * Is used to the indicate whether contact information is being requested.
     *
     * @return \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\ContactInfoAType
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * Is used to the indicate whether contact information is being requested.
     *
     * @param \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\ContactInfoAType $contactInfo
     * @return self
     */
    public function setContactInfo(?\Recranet\OTA\Type\HotelDescriptiveInfoRequestType\ContactInfoAType $contactInfo = null)
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }

    /**
     * Gets as multimediaObjects
     *
     * Is used to the indicate whether multimedia information is being requested.
     *
     * @return \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\MultimediaObjectsAType
     */
    public function getMultimediaObjects()
    {
        return $this->multimediaObjects;
    }

    /**
     * Sets a new multimediaObjects
     *
     * Is used to the indicate whether multimedia information is being requested.
     *
     * @param \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\MultimediaObjectsAType $multimediaObjects
     * @return self
     */
    public function setMultimediaObjects(?\Recranet\OTA\Type\HotelDescriptiveInfoRequestType\MultimediaObjectsAType $multimediaObjects = null)
    {
        $this->multimediaObjects = $multimediaObjects;
        return $this;
    }

    /**
     * Adds as contentInfo
     *
     * Container for specific information.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType $contentInfo
     */
    public function addToContentInfos(\Recranet\OTA\Type\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType $contentInfo)
    {
        $this->contentInfos[] = $contentInfo;
        return $this;
    }

    /**
     * isset contentInfos
     *
     * Container for specific information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContentInfos($index)
    {
        return isset($this->contentInfos[$index]);
    }

    /**
     * unset contentInfos
     *
     * Container for specific information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContentInfos($index)
    {
        unset($this->contentInfos[$index]);
    }

    /**
     * Gets as contentInfos
     *
     * Container for specific information.
     *
     * @return \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType[]
     */
    public function getContentInfos()
    {
        return $this->contentInfos;
    }

    /**
     * Sets a new contentInfos
     *
     * Container for specific information.
     *
     * @param \Recranet\OTA\Type\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType[] $contentInfos
     * @return self
     */
    public function setContentInfos(array $contentInfos = null)
    {
        $this->contentInfos = $contentInfos;
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

