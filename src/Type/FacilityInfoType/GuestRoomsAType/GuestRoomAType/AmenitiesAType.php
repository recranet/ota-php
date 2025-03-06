<?php

namespace Recranet\OTA\Type\FacilityInfoType\GuestRoomsAType\GuestRoomAType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{
    /**
     * Tangible room item(s) (e.g., newspaper) available to the guest.
     *
     * @var \Recranet\OTA\Type\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType[] $amenity
     */
    private $amenity = [
        
    ];

    /**
     * Adds as amenity
     *
     * Tangible room item(s) (e.g., newspaper) available to the guest.
     *
     * @return self
     * @param \Recranet\OTA\Type\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType $amenity
     */
    public function addToAmenity(\Recranet\OTA\Type\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType $amenity)
    {
        $this->amenity[] = $amenity;
        return $this;
    }

    /**
     * isset amenity
     *
     * Tangible room item(s) (e.g., newspaper) available to the guest.
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
     * Tangible room item(s) (e.g., newspaper) available to the guest.
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
     * Tangible room item(s) (e.g., newspaper) available to the guest.
     *
     * @return \Recranet\OTA\Type\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * Tangible room item(s) (e.g., newspaper) available to the guest.
     *
     * @param \Recranet\OTA\Type\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;
        return $this;
    }
}

