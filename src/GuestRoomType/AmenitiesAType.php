<?php

namespace Recranet\OTA\GuestRoomType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{
    /**
     * Amenity Code Attribute is used to hold actual amenity code.
     *
     * @var \Recranet\OTA\GuestRoomType\AmenitiesAType\AmenityAType[] $amenity
     */
    private $amenity = [
        
    ];

    /**
     * Adds as amenity
     *
     * Amenity Code Attribute is used to hold actual amenity code.
     *
     * @return self
     * @param \Recranet\OTA\GuestRoomType\AmenitiesAType\AmenityAType $amenity
     */
    public function addToAmenity(\Recranet\OTA\GuestRoomType\AmenitiesAType\AmenityAType $amenity)
    {
        $this->amenity[] = $amenity;
        return $this;
    }

    /**
     * isset amenity
     *
     * Amenity Code Attribute is used to hold actual amenity code.
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
     * Amenity Code Attribute is used to hold actual amenity code.
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
     * Amenity Code Attribute is used to hold actual amenity code.
     *
     * @return \Recranet\OTA\GuestRoomType\AmenitiesAType\AmenityAType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * Amenity Code Attribute is used to hold actual amenity code.
     *
     * @param \Recranet\OTA\GuestRoomType\AmenitiesAType\AmenityAType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;
        return $this;
    }
}

