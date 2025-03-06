<?php

namespace Recranet\OTA\Type\RoomTypeType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{
    /**
     * Used to provide room amenity information.
     *
     * @var \Recranet\OTA\Type\RoomAmenityPrefType[] $amenity
     */
    private $amenity = [
        
    ];

    /**
     * Adds as amenity
     *
     * Used to provide room amenity information.
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomAmenityPrefType $amenity
     */
    public function addToAmenity(\Recranet\OTA\Type\RoomAmenityPrefType $amenity)
    {
        $this->amenity[] = $amenity;
        return $this;
    }

    /**
     * isset amenity
     *
     * Used to provide room amenity information.
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
     * Used to provide room amenity information.
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
     * Used to provide room amenity information.
     *
     * @return \Recranet\OTA\Type\RoomAmenityPrefType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * Used to provide room amenity information.
     *
     * @param \Recranet\OTA\Type\RoomAmenityPrefType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity = null)
    {
        $this->amenity = $amenity;
        return $this;
    }
}

