<?php

namespace Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{
    /**
     * An amenity for the contact.
     *
     * @var \Recranet\OTA\RoomAmenityPrefType[] $amenity
     */
    private $amenity = [
        
    ];

    /**
     * Adds as amenity
     *
     * An amenity for the contact.
     *
     * @return self
     * @param \Recranet\OTA\RoomAmenityPrefType $amenity
     */
    public function addToAmenity(\Recranet\OTA\RoomAmenityPrefType $amenity)
    {
        $this->amenity[] = $amenity;
        return $this;
    }

    /**
     * isset amenity
     *
     * An amenity for the contact.
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
     * An amenity for the contact.
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
     * An amenity for the contact.
     *
     * @return \Recranet\OTA\RoomAmenityPrefType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * An amenity for the contact.
     *
     * @param \Recranet\OTA\RoomAmenityPrefType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;
        return $this;
    }
}

