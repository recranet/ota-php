<?php

namespace Recranet\OTA\PropertyValueMatchType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{
    /**
     * This provides an area to pass amenity information.
     *
     * @var \Recranet\OTA\PropertyValueMatchType\AmenitiesAType\AmenityAType[] $amenity
     */
    private $amenity = [
        
    ];

    /**
     * Adds as amenity
     *
     * This provides an area to pass amenity information.
     *
     * @return self
     * @param \Recranet\OTA\PropertyValueMatchType\AmenitiesAType\AmenityAType $amenity
     */
    public function addToAmenity(\Recranet\OTA\PropertyValueMatchType\AmenitiesAType\AmenityAType $amenity)
    {
        $this->amenity[] = $amenity;
        return $this;
    }

    /**
     * isset amenity
     *
     * This provides an area to pass amenity information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAmenity($index)
    {
        return isset($this->amenity[$index]);
    }

    /**
     * unset amenity
     *
     * This provides an area to pass amenity information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAmenity($index)
    {
        unset($this->amenity[$index]);
    }

    /**
     * Gets as amenity
     *
     * This provides an area to pass amenity information.
     *
     * @return \Recranet\OTA\PropertyValueMatchType\AmenitiesAType\AmenityAType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * This provides an area to pass amenity information.
     *
     * @param \Recranet\OTA\PropertyValueMatchType\AmenitiesAType\AmenityAType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;
        return $this;
    }
}

