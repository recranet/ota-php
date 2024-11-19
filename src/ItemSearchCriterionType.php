<?php

namespace Recranet\OTA;

/**
 * Class representing ItemSearchCriterionType
 *
 * Identifies the criterion for a search.
 * XSD Type: ItemSearchCriterionType
 */
class ItemSearchCriterionType
{
    /**
     * Values of "true" or "false", indicating whether the string of the search value must be an exact match.
     *
     * @var bool $exactMatch
     */
    private $exactMatch = null;

    /**
     * An enumerated list, indicating the level of importance of the search criterion. Acceptable values are "Mandatory", "High", "Medium", or "Low."
     *
     * @var string $importanceType
     */
    private $importanceType = null;

    /**
     * Defines a ranking scale expressed as integers; meaning and scale are based on individual implementations.
     *
     * @var int $ranking
     */
    private $ranking = null;

    /**
     * The Position element contains three attributes, Latitude, Longitude, and Altitude, used to indicate the geographic location(s) requested by the search, expressed in notation specified by ISO standard 6709. It is likely that only the first two attributes, Latitude and Longitude, would be needed to define a geographic area.
     *
     * @var \Recranet\OTA\ItemSearchCriterionType\PositionAType $position
     */
    private $position = null;

    /**
     * Uses any part of address information, such as street name, postal code, or country code.
     *
     * @var \Recranet\OTA\ItemSearchCriterionType\AddressAType $address
     */
    private $address = null;

    /**
     * Telephone number(s) used in the search.
     *
     * @var \Recranet\OTA\ItemSearchCriterionType\TelephoneAType $telephone
     */
    private $telephone = null;

    /**
     * The Reference Point element allows for a search by proximity to a designated reference point by name.
     *
     * @var \Recranet\OTA\ItemSearchCriterionType\RefPointAType[] $refPoint
     */
    private $refPoint = [
        
    ];

    /**
     * Indicates the location of points of interest.
     *
     * @var \Recranet\OTA\ItemSearchCriterionType\CodeRefAType $codeRef
     */
    private $codeRef = null;

    /**
     * Indicates the detail of hotel reference information.
     *
     * @var \Recranet\OTA\ItemSearchCriterionType\HotelRefAType[] $hotelRef
     */
    private $hotelRef = [
        
    ];

    /**
     * Used to specify the extent of a search area. The extent is relative to an element (position, address, hotel reference, etc.) present in this ItemSearchCriterionType that specifies a location.
     *
     * @var \Recranet\OTA\ItemSearchCriterionType\RadiusAType $radius
     */
    private $radius = null;

    /**
     * Provides coordinates used to define the area of a map.
     *
     * @var \Recranet\OTA\ItemSearchCriterionType\MapAreaAType $mapArea
     */
    private $mapArea = null;

    /**
     * A collection of Additional Content elements.
     *
     * @var \Recranet\OTA\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType[] $additionalContents
     */
    private $additionalContents = null;

    /**
     * Gets as exactMatch
     *
     * Values of "true" or "false", indicating whether the string of the search value must be an exact match.
     *
     * @return bool
     */
    public function getExactMatch()
    {
        return $this->exactMatch;
    }

    /**
     * Sets a new exactMatch
     *
     * Values of "true" or "false", indicating whether the string of the search value must be an exact match.
     *
     * @param bool $exactMatch
     * @return self
     */
    public function setExactMatch($exactMatch)
    {
        $this->exactMatch = $exactMatch;
        return $this;
    }

    /**
     * Gets as importanceType
     *
     * An enumerated list, indicating the level of importance of the search criterion. Acceptable values are "Mandatory", "High", "Medium", or "Low."
     *
     * @return string
     */
    public function getImportanceType()
    {
        return $this->importanceType;
    }

    /**
     * Sets a new importanceType
     *
     * An enumerated list, indicating the level of importance of the search criterion. Acceptable values are "Mandatory", "High", "Medium", or "Low."
     *
     * @param string $importanceType
     * @return self
     */
    public function setImportanceType($importanceType)
    {
        $this->importanceType = $importanceType;
        return $this;
    }

    /**
     * Gets as ranking
     *
     * Defines a ranking scale expressed as integers; meaning and scale are based on individual implementations.
     *
     * @return int
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * Sets a new ranking
     *
     * Defines a ranking scale expressed as integers; meaning and scale are based on individual implementations.
     *
     * @param int $ranking
     * @return self
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;
        return $this;
    }

    /**
     * Gets as position
     *
     * The Position element contains three attributes, Latitude, Longitude, and Altitude, used to indicate the geographic location(s) requested by the search, expressed in notation specified by ISO standard 6709. It is likely that only the first two attributes, Latitude and Longitude, would be needed to define a geographic area.
     *
     * @return \Recranet\OTA\ItemSearchCriterionType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The Position element contains three attributes, Latitude, Longitude, and Altitude, used to indicate the geographic location(s) requested by the search, expressed in notation specified by ISO standard 6709. It is likely that only the first two attributes, Latitude and Longitude, would be needed to define a geographic area.
     *
     * @param \Recranet\OTA\ItemSearchCriterionType\PositionAType $position
     * @return self
     */
    public function setPosition(?\Recranet\OTA\ItemSearchCriterionType\PositionAType $position = null)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as address
     *
     * Uses any part of address information, such as street name, postal code, or country code.
     *
     * @return \Recranet\OTA\ItemSearchCriterionType\AddressAType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Uses any part of address information, such as street name, postal code, or country code.
     *
     * @param \Recranet\OTA\ItemSearchCriterionType\AddressAType $address
     * @return self
     */
    public function setAddress(?\Recranet\OTA\ItemSearchCriterionType\AddressAType $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as telephone
     *
     * Telephone number(s) used in the search.
     *
     * @return \Recranet\OTA\ItemSearchCriterionType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Telephone number(s) used in the search.
     *
     * @param \Recranet\OTA\ItemSearchCriterionType\TelephoneAType $telephone
     * @return self
     */
    public function setTelephone(?\Recranet\OTA\ItemSearchCriterionType\TelephoneAType $telephone = null)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Adds as refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated reference point by name.
     *
     * @return self
     * @param \Recranet\OTA\ItemSearchCriterionType\RefPointAType $refPoint
     */
    public function addToRefPoint(\Recranet\OTA\ItemSearchCriterionType\RefPointAType $refPoint)
    {
        $this->refPoint[] = $refPoint;
        return $this;
    }

    /**
     * isset refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated reference point by name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefPoint($index)
    {
        return isset($this->refPoint[$index]);
    }

    /**
     * unset refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated reference point by name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefPoint($index)
    {
        unset($this->refPoint[$index]);
    }

    /**
     * Gets as refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated reference point by name.
     *
     * @return \Recranet\OTA\ItemSearchCriterionType\RefPointAType[]
     */
    public function getRefPoint()
    {
        return $this->refPoint;
    }

    /**
     * Sets a new refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated reference point by name.
     *
     * @param \Recranet\OTA\ItemSearchCriterionType\RefPointAType[] $refPoint
     * @return self
     */
    public function setRefPoint(array $refPoint = null)
    {
        $this->refPoint = $refPoint;
        return $this;
    }

    /**
     * Gets as codeRef
     *
     * Indicates the location of points of interest.
     *
     * @return \Recranet\OTA\ItemSearchCriterionType\CodeRefAType
     */
    public function getCodeRef()
    {
        return $this->codeRef;
    }

    /**
     * Sets a new codeRef
     *
     * Indicates the location of points of interest.
     *
     * @param \Recranet\OTA\ItemSearchCriterionType\CodeRefAType $codeRef
     * @return self
     */
    public function setCodeRef(?\Recranet\OTA\ItemSearchCriterionType\CodeRefAType $codeRef = null)
    {
        $this->codeRef = $codeRef;
        return $this;
    }

    /**
     * Adds as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return self
     * @param \Recranet\OTA\ItemSearchCriterionType\HotelRefAType $hotelRef
     */
    public function addToHotelRef(\Recranet\OTA\ItemSearchCriterionType\HotelRefAType $hotelRef)
    {
        $this->hotelRef[] = $hotelRef;
        return $this;
    }

    /**
     * isset hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelRef($index)
    {
        return isset($this->hotelRef[$index]);
    }

    /**
     * unset hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelRef($index)
    {
        unset($this->hotelRef[$index]);
    }

    /**
     * Gets as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return \Recranet\OTA\ItemSearchCriterionType\HotelRefAType[]
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @param \Recranet\OTA\ItemSearchCriterionType\HotelRefAType[] $hotelRef
     * @return self
     */
    public function setHotelRef(array $hotelRef = null)
    {
        $this->hotelRef = $hotelRef;
        return $this;
    }

    /**
     * Gets as radius
     *
     * Used to specify the extent of a search area. The extent is relative to an element (position, address, hotel reference, etc.) present in this ItemSearchCriterionType that specifies a location.
     *
     * @return \Recranet\OTA\ItemSearchCriterionType\RadiusAType
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Sets a new radius
     *
     * Used to specify the extent of a search area. The extent is relative to an element (position, address, hotel reference, etc.) present in this ItemSearchCriterionType that specifies a location.
     *
     * @param \Recranet\OTA\ItemSearchCriterionType\RadiusAType $radius
     * @return self
     */
    public function setRadius(?\Recranet\OTA\ItemSearchCriterionType\RadiusAType $radius = null)
    {
        $this->radius = $radius;
        return $this;
    }

    /**
     * Gets as mapArea
     *
     * Provides coordinates used to define the area of a map.
     *
     * @return \Recranet\OTA\ItemSearchCriterionType\MapAreaAType
     */
    public function getMapArea()
    {
        return $this->mapArea;
    }

    /**
     * Sets a new mapArea
     *
     * Provides coordinates used to define the area of a map.
     *
     * @param \Recranet\OTA\ItemSearchCriterionType\MapAreaAType $mapArea
     * @return self
     */
    public function setMapArea(?\Recranet\OTA\ItemSearchCriterionType\MapAreaAType $mapArea = null)
    {
        $this->mapArea = $mapArea;
        return $this;
    }

    /**
     * Adds as additionalContent
     *
     * A collection of Additional Content elements.
     *
     * @return self
     * @param \Recranet\OTA\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType $additionalContent
     */
    public function addToAdditionalContents(\Recranet\OTA\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType $additionalContent)
    {
        $this->additionalContents[] = $additionalContent;
        return $this;
    }

    /**
     * isset additionalContents
     *
     * A collection of Additional Content elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalContents($index)
    {
        return isset($this->additionalContents[$index]);
    }

    /**
     * unset additionalContents
     *
     * A collection of Additional Content elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalContents($index)
    {
        unset($this->additionalContents[$index]);
    }

    /**
     * Gets as additionalContents
     *
     * A collection of Additional Content elements.
     *
     * @return \Recranet\OTA\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType[]
     */
    public function getAdditionalContents()
    {
        return $this->additionalContents;
    }

    /**
     * Sets a new additionalContents
     *
     * A collection of Additional Content elements.
     *
     * @param \Recranet\OTA\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType[] $additionalContents
     * @return self
     */
    public function setAdditionalContents(array $additionalContents = null)
    {
        $this->additionalContents = $additionalContents;
        return $this;
    }
}

