<?php

namespace Recranet\OTA\Type\PostEventSiteReportType\ContactsAType\ContactAType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{
    /**
     * An amenity for the contact.
     *
     * @var \Recranet\OTA\Type\RoomAmenityPrefType[] $amenity
     */
    private $amenity = [
        
    ];

    /**
     * Adds as amenity
     *
     * An amenity for the contact.
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
     * @return \Recranet\OTA\Type\RoomAmenityPrefType[]
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
     * @param \Recranet\OTA\Type\RoomAmenityPrefType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;
        return $this;
    }
}

