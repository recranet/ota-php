<?php

namespace Recranet\OTA;

/**
 * Class representing PropertyValueMatchType
 *
 * A property that matches some or all of the search criteria.
 * XSD Type: PropertyValueMatchType
 */
class PropertyValueMatchType extends BasicPropertyInfoType
{
    /**
     * The search response returns this attribute if there were additional items that could not fit within the response. The text value returned should be echoed in the subsequent request in "Criteria/Criterion@MoreDataEchoToken" to indicate where to begin the next block of data.
     *
     * @var string $moreDataEchoToken
     */
    private $moreDataEchoToken = null;

    /**
     * When true, this property is in the same country as the requested city's country. When false, indicates this country is not the same as the requested city's country.
     *
     * @var bool $sameCountryInd
     */
    private $sameCountryInd = null;

    /**
     * The availability status of the property.
     *
     * @var string $availabilityStatus
     */
    private $availabilityStatus = null;

    /**
     * The string value used to search for a property is returned. The SearchValueMatch element returns the input value and offers systems the ability to generate text in the Warnings that communicate the reason for failure to locate a hotel. For example, a Reference Point search may return the following processing message; "No hotels found within 5 miles of Oswego Regional Airport".
     *
     * @var \Recranet\OTA\PropertyValueMatchType\SearchValueMatchAType[] $searchValueMatch
     */
    private $searchValueMatch = [
        
    ];

    /**
     * A collection of available amenities.
     *
     * @var \Recranet\OTA\PropertyValueMatchType\AmenitiesAType\AmenityAType[] $amenities
     */
    private $amenities = null;

    /**
     * Used to provide the minimum and maximum range of rates at this hotel property.
     *
     * @var \Recranet\OTA\PropertyValueMatchType\RateRangeAType $rateRange
     */
    private $rateRange = null;

    /**
     * Gets as moreDataEchoToken
     *
     * The search response returns this attribute if there were additional items that could not fit within the response. The text value returned should be echoed in the subsequent request in "Criteria/Criterion@MoreDataEchoToken" to indicate where to begin the next block of data.
     *
     * @return string
     */
    public function getMoreDataEchoToken()
    {
        return $this->moreDataEchoToken;
    }

    /**
     * Sets a new moreDataEchoToken
     *
     * The search response returns this attribute if there were additional items that could not fit within the response. The text value returned should be echoed in the subsequent request in "Criteria/Criterion@MoreDataEchoToken" to indicate where to begin the next block of data.
     *
     * @param string $moreDataEchoToken
     * @return self
     */
    public function setMoreDataEchoToken($moreDataEchoToken)
    {
        $this->moreDataEchoToken = $moreDataEchoToken;
        return $this;
    }

    /**
     * Gets as sameCountryInd
     *
     * When true, this property is in the same country as the requested city's country. When false, indicates this country is not the same as the requested city's country.
     *
     * @return bool
     */
    public function getSameCountryInd()
    {
        return $this->sameCountryInd;
    }

    /**
     * Sets a new sameCountryInd
     *
     * When true, this property is in the same country as the requested city's country. When false, indicates this country is not the same as the requested city's country.
     *
     * @param bool $sameCountryInd
     * @return self
     */
    public function setSameCountryInd($sameCountryInd)
    {
        $this->sameCountryInd = $sameCountryInd;
        return $this;
    }

    /**
     * Gets as availabilityStatus
     *
     * The availability status of the property.
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
     * The availability status of the property.
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
     * Adds as searchValueMatch
     *
     * The string value used to search for a property is returned. The SearchValueMatch element returns the input value and offers systems the ability to generate text in the Warnings that communicate the reason for failure to locate a hotel. For example, a Reference Point search may return the following processing message; "No hotels found within 5 miles of Oswego Regional Airport".
     *
     * @return self
     * @param \Recranet\OTA\PropertyValueMatchType\SearchValueMatchAType $searchValueMatch
     */
    public function addToSearchValueMatch(\Recranet\OTA\PropertyValueMatchType\SearchValueMatchAType $searchValueMatch)
    {
        $this->searchValueMatch[] = $searchValueMatch;
        return $this;
    }

    /**
     * isset searchValueMatch
     *
     * The string value used to search for a property is returned. The SearchValueMatch element returns the input value and offers systems the ability to generate text in the Warnings that communicate the reason for failure to locate a hotel. For example, a Reference Point search may return the following processing message; "No hotels found within 5 miles of Oswego Regional Airport".
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSearchValueMatch($index)
    {
        return isset($this->searchValueMatch[$index]);
    }

    /**
     * unset searchValueMatch
     *
     * The string value used to search for a property is returned. The SearchValueMatch element returns the input value and offers systems the ability to generate text in the Warnings that communicate the reason for failure to locate a hotel. For example, a Reference Point search may return the following processing message; "No hotels found within 5 miles of Oswego Regional Airport".
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSearchValueMatch($index)
    {
        unset($this->searchValueMatch[$index]);
    }

    /**
     * Gets as searchValueMatch
     *
     * The string value used to search for a property is returned. The SearchValueMatch element returns the input value and offers systems the ability to generate text in the Warnings that communicate the reason for failure to locate a hotel. For example, a Reference Point search may return the following processing message; "No hotels found within 5 miles of Oswego Regional Airport".
     *
     * @return \Recranet\OTA\PropertyValueMatchType\SearchValueMatchAType[]
     */
    public function getSearchValueMatch()
    {
        return $this->searchValueMatch;
    }

    /**
     * Sets a new searchValueMatch
     *
     * The string value used to search for a property is returned. The SearchValueMatch element returns the input value and offers systems the ability to generate text in the Warnings that communicate the reason for failure to locate a hotel. For example, a Reference Point search may return the following processing message; "No hotels found within 5 miles of Oswego Regional Airport".
     *
     * @param \Recranet\OTA\PropertyValueMatchType\SearchValueMatchAType[] $searchValueMatch
     * @return self
     */
    public function setSearchValueMatch(array $searchValueMatch = null)
    {
        $this->searchValueMatch = $searchValueMatch;
        return $this;
    }

    /**
     * Adds as amenity
     *
     * A collection of available amenities.
     *
     * @return self
     * @param \Recranet\OTA\PropertyValueMatchType\AmenitiesAType\AmenityAType $amenity
     */
    public function addToAmenities(\Recranet\OTA\PropertyValueMatchType\AmenitiesAType\AmenityAType $amenity)
    {
        $this->amenities[] = $amenity;
        return $this;
    }

    /**
     * isset amenities
     *
     * A collection of available amenities.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAmenities($index)
    {
        return isset($this->amenities[$index]);
    }

    /**
     * unset amenities
     *
     * A collection of available amenities.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAmenities($index)
    {
        unset($this->amenities[$index]);
    }

    /**
     * Gets as amenities
     *
     * A collection of available amenities.
     *
     * @return \Recranet\OTA\PropertyValueMatchType\AmenitiesAType\AmenityAType[]
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * Sets a new amenities
     *
     * A collection of available amenities.
     *
     * @param \Recranet\OTA\PropertyValueMatchType\AmenitiesAType\AmenityAType[] $amenities
     * @return self
     */
    public function setAmenities(array $amenities = null)
    {
        $this->amenities = $amenities;
        return $this;
    }

    /**
     * Gets as rateRange
     *
     * Used to provide the minimum and maximum range of rates at this hotel property.
     *
     * @return \Recranet\OTA\PropertyValueMatchType\RateRangeAType
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * Used to provide the minimum and maximum range of rates at this hotel property.
     *
     * @param \Recranet\OTA\PropertyValueMatchType\RateRangeAType $rateRange
     * @return self
     */
    public function setRateRange(?\Recranet\OTA\PropertyValueMatchType\RateRangeAType $rateRange = null)
    {
        $this->rateRange = $rateRange;
        return $this;
    }
}

