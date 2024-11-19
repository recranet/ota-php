<?php

namespace Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType;

/**
 * Class representing SiteAType
 */
class SiteAType
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
     * When True, the associated site was not included as part of the original Request message, but is being included as part of the Response message as an alternate location.
     *
     * @var bool $crossSellIndicator
     */
    private $crossSellIndicator = null;

    /**
     * Indicates how many events of a similar size this location has hosted in the past year.
     *
     * @var int $similarEventCount
     */
    private $similarEventCount = null;

    /**
     * This is used to send information about the data that will be returned, specifically when and in what delivery mode.
     *
     * @var \Recranet\OTA\RFPResponseDetailType $responseType
     */
    private $responseType = null;

    /**
     * A collection of contacts (e.g. a catering manager, national sales office, management company, franchisee)
     *
     * @var \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ContactInfosAType $contactInfos
     */
    private $contactInfos = null;

    /**
     * A collection of inquiry dates.
     *
     * @var \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType $dates
     */
    private $dates = null;

    /**
     * This holds information from a specific site on the requested data.
     *
     * @var \Recranet\OTA\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * This is a UniqueID for this site for this request.
     *
     * @var \Recranet\OTA\UniqueIDType $siteID
     */
    private $siteID = null;

    /**
     * A collection of Insurance Information
     *
     * @var \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType $insuranceInfos
     */
    private $insuranceInfos = null;

    /**
     * A collection of recommendation references.
     *
     * @var \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType[] $references
     */
    private $references = null;

    /**
     * Collection of additional information.
     *
     * @var \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[] $additionalInfos
     */
    private $additionalInfos = null;

    /**
     * A container for collecting answers to custom questions.
     *
     * @var \Recranet\OTA\CustomQuestionType[] $answers
     */
    private $answers = null;

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
     * Gets as crossSellIndicator
     *
     * When True, the associated site was not included as part of the original Request message, but is being included as part of the Response message as an alternate location.
     *
     * @return bool
     */
    public function getCrossSellIndicator()
    {
        return $this->crossSellIndicator;
    }

    /**
     * Sets a new crossSellIndicator
     *
     * When True, the associated site was not included as part of the original Request message, but is being included as part of the Response message as an alternate location.
     *
     * @param bool $crossSellIndicator
     * @return self
     */
    public function setCrossSellIndicator($crossSellIndicator)
    {
        $this->crossSellIndicator = $crossSellIndicator;
        return $this;
    }

    /**
     * Gets as similarEventCount
     *
     * Indicates how many events of a similar size this location has hosted in the past year.
     *
     * @return int
     */
    public function getSimilarEventCount()
    {
        return $this->similarEventCount;
    }

    /**
     * Sets a new similarEventCount
     *
     * Indicates how many events of a similar size this location has hosted in the past year.
     *
     * @param int $similarEventCount
     * @return self
     */
    public function setSimilarEventCount($similarEventCount)
    {
        $this->similarEventCount = $similarEventCount;
        return $this;
    }

    /**
     * Gets as responseType
     *
     * This is used to send information about the data that will be returned, specifically when and in what delivery mode.
     *
     * @return \Recranet\OTA\RFPResponseDetailType
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * This is used to send information about the data that will be returned, specifically when and in what delivery mode.
     *
     * @param \Recranet\OTA\RFPResponseDetailType $responseType
     * @return self
     */
    public function setResponseType(?\Recranet\OTA\RFPResponseDetailType $responseType = null)
    {
        $this->responseType = $responseType;
        return $this;
    }

    /**
     * Gets as contactInfos
     *
     * A collection of contacts (e.g. a catering manager, national sales office, management company, franchisee)
     *
     * @return \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ContactInfosAType
     */
    public function getContactInfos()
    {
        return $this->contactInfos;
    }

    /**
     * Sets a new contactInfos
     *
     * A collection of contacts (e.g. a catering manager, national sales office, management company, franchisee)
     *
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ContactInfosAType $contactInfos
     * @return self
     */
    public function setContactInfos(?\Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ContactInfosAType $contactInfos = null)
    {
        $this->contactInfos = $contactInfos;
        return $this;
    }

    /**
     * Gets as dates
     *
     * A collection of inquiry dates.
     *
     * @return \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Sets a new dates
     *
     * A collection of inquiry dates.
     *
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType $dates
     * @return self
     */
    public function setDates(?\Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType $dates = null)
    {
        $this->dates = $dates;
        return $this;
    }

    /**
     * Adds as comment
     *
     * This holds information from a specific site on the requested data.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $comment
     */
    public function addToComment(\Recranet\OTA\ParagraphType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * This holds information from a specific site on the requested data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * This holds information from a specific site on the requested data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * This holds information from a specific site on the requested data.
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * This holds information from a specific site on the requested data.
     *
     * @param \Recranet\OTA\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as siteID
     *
     * This is a UniqueID for this site for this request.
     *
     * @return \Recranet\OTA\UniqueIDType
     */
    public function getSiteID()
    {
        return $this->siteID;
    }

    /**
     * Sets a new siteID
     *
     * This is a UniqueID for this site for this request.
     *
     * @param \Recranet\OTA\UniqueIDType $siteID
     * @return self
     */
    public function setSiteID(?\Recranet\OTA\UniqueIDType $siteID = null)
    {
        $this->siteID = $siteID;
        return $this;
    }

    /**
     * Gets as insuranceInfos
     *
     * A collection of Insurance Information
     *
     * @return \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType
     */
    public function getInsuranceInfos()
    {
        return $this->insuranceInfos;
    }

    /**
     * Sets a new insuranceInfos
     *
     * A collection of Insurance Information
     *
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType $insuranceInfos
     * @return self
     */
    public function setInsuranceInfos(?\Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType $insuranceInfos = null)
    {
        $this->insuranceInfos = $insuranceInfos;
        return $this;
    }

    /**
     * Adds as reference
     *
     * A collection of recommendation references.
     *
     * @return self
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType $reference
     */
    public function addToReferences(\Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType $reference)
    {
        $this->references[] = $reference;
        return $this;
    }

    /**
     * isset references
     *
     * A collection of recommendation references.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferences($index)
    {
        return isset($this->references[$index]);
    }

    /**
     * unset references
     *
     * A collection of recommendation references.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferences($index)
    {
        unset($this->references[$index]);
    }

    /**
     * Gets as references
     *
     * A collection of recommendation references.
     *
     * @return \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType[]
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * Sets a new references
     *
     * A collection of recommendation references.
     *
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType[] $references
     * @return self
     */
    public function setReferences(array $references = null)
    {
        $this->references = $references;
        return $this;
    }

    /**
     * Adds as additionalInfo
     *
     * Collection of additional information.
     *
     * @return self
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo
     */
    public function addToAdditionalInfos(\Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo)
    {
        $this->additionalInfos[] = $additionalInfo;
        return $this;
    }

    /**
     * isset additionalInfos
     *
     * Collection of additional information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInfos($index)
    {
        return isset($this->additionalInfos[$index]);
    }

    /**
     * unset additionalInfos
     *
     * Collection of additional information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInfos($index)
    {
        unset($this->additionalInfos[$index]);
    }

    /**
     * Gets as additionalInfos
     *
     * Collection of additional information.
     *
     * @return \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     */
    public function getAdditionalInfos()
    {
        return $this->additionalInfos;
    }

    /**
     * Sets a new additionalInfos
     *
     * Collection of additional information.
     *
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[] $additionalInfos
     * @return self
     */
    public function setAdditionalInfos(array $additionalInfos = null)
    {
        $this->additionalInfos = $additionalInfos;
        return $this;
    }

    /**
     * Adds as answer
     *
     * A container for collecting answers to custom questions.
     *
     * @return self
     * @param \Recranet\OTA\CustomQuestionType $answer
     */
    public function addToAnswers(\Recranet\OTA\CustomQuestionType $answer)
    {
        $this->answers[] = $answer;
        return $this;
    }

    /**
     * isset answers
     *
     * A container for collecting answers to custom questions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnswers($index)
    {
        return isset($this->answers[$index]);
    }

    /**
     * unset answers
     *
     * A container for collecting answers to custom questions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnswers($index)
    {
        unset($this->answers[$index]);
    }

    /**
     * Gets as answers
     *
     * A container for collecting answers to custom questions.
     *
     * @return \Recranet\OTA\CustomQuestionType[]
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Sets a new answers
     *
     * A container for collecting answers to custom questions.
     *
     * @param \Recranet\OTA\CustomQuestionType[] $answers
     * @return self
     */
    public function setAnswers(array $answers = null)
    {
        $this->answers = $answers;
        return $this;
    }
}

