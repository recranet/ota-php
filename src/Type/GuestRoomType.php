<?php

namespace Recranet\OTA\Type;

/**
 * Class representing GuestRoomType
 *
 * GuestRoomType is used to contain all the information on a guest room.
 * XSD Type: GuestRoomType
 */
class GuestRoomType
{
    /**
     * Max rollaways, number of beds.
     *
     * @var \Recranet\OTA\Type\GuestRoomType\QuantitiesAType $quantities
     */
    private $quantities = null;

    /**
     * Provides parameters of occupancy limits.
     *
     * @var \Recranet\OTA\Type\GuestRoomType\OccupancyAType[] $occupancy
     */
    private $occupancy = [
        
    ];

    /**
     * Attributes to describe the room from room category to location to view to bed type.
     *
     * @var \Recranet\OTA\Type\GuestRoomType\RoomAType $room
     */
    private $room = null;

    /**
     * Collection of room level amenities.
     *
     * @var \Recranet\OTA\Type\GuestRoomType\AmenitiesAType\AmenityAType[] $amenities
     */
    private $amenities = null;

    /**
     * Collection of fees charged at the room level.
     *
     * @var \Recranet\OTA\Type\GuestRoomType\RoomLevelFeesAType $roomLevelFees
     */
    private $roomLevelFees = null;

    /**
     * Additional guest amounts which are attached to room, not rate.
     *
     * @var \Recranet\OTA\Type\AdditionalGuestAmountType[] $additionalGuestAmount
     */
    private $additionalGuestAmount = [
        
    ];

    /**
     * Description of the Room.
     *
     * @var \Recranet\OTA\Type\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as quantities
     *
     * Max rollaways, number of beds.
     *
     * @return \Recranet\OTA\Type\GuestRoomType\QuantitiesAType
     */
    public function getQuantities()
    {
        return $this->quantities;
    }

    /**
     * Sets a new quantities
     *
     * Max rollaways, number of beds.
     *
     * @param \Recranet\OTA\Type\GuestRoomType\QuantitiesAType $quantities
     * @return self
     */
    public function setQuantities(?\Recranet\OTA\Type\GuestRoomType\QuantitiesAType $quantities = null)
    {
        $this->quantities = $quantities;
        return $this;
    }

    /**
     * Adds as occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @return self
     * @param \Recranet\OTA\Type\GuestRoomType\OccupancyAType $occupancy
     */
    public function addToOccupancy(\Recranet\OTA\Type\GuestRoomType\OccupancyAType $occupancy)
    {
        $this->occupancy[] = $occupancy;
        return $this;
    }

    /**
     * isset occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOccupancy($index)
    {
        return isset($this->occupancy[$index]);
    }

    /**
     * unset occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOccupancy($index)
    {
        unset($this->occupancy[$index]);
    }

    /**
     * Gets as occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @return \Recranet\OTA\Type\GuestRoomType\OccupancyAType[]
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @param \Recranet\OTA\Type\GuestRoomType\OccupancyAType[] $occupancy
     * @return self
     */
    public function setOccupancy(array $occupancy = null)
    {
        $this->occupancy = $occupancy;
        return $this;
    }

    /**
     * Gets as room
     *
     * Attributes to describe the room from room category to location to view to bed type.
     *
     * @return \Recranet\OTA\Type\GuestRoomType\RoomAType
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Sets a new room
     *
     * Attributes to describe the room from room category to location to view to bed type.
     *
     * @param \Recranet\OTA\Type\GuestRoomType\RoomAType $room
     * @return self
     */
    public function setRoom(?\Recranet\OTA\Type\GuestRoomType\RoomAType $room = null)
    {
        $this->room = $room;
        return $this;
    }

    /**
     * Adds as amenity
     *
     * Collection of room level amenities.
     *
     * @return self
     * @param \Recranet\OTA\Type\GuestRoomType\AmenitiesAType\AmenityAType $amenity
     */
    public function addToAmenities(\Recranet\OTA\Type\GuestRoomType\AmenitiesAType\AmenityAType $amenity)
    {
        $this->amenities[] = $amenity;
        return $this;
    }

    /**
     * isset amenities
     *
     * Collection of room level amenities.
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
     * Collection of room level amenities.
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
     * Collection of room level amenities.
     *
     * @return \Recranet\OTA\Type\GuestRoomType\AmenitiesAType\AmenityAType[]
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * Sets a new amenities
     *
     * Collection of room level amenities.
     *
     * @param \Recranet\OTA\Type\GuestRoomType\AmenitiesAType\AmenityAType[] $amenities
     * @return self
     */
    public function setAmenities(array $amenities = null)
    {
        $this->amenities = $amenities;
        return $this;
    }

    /**
     * Gets as roomLevelFees
     *
     * Collection of fees charged at the room level.
     *
     * @return \Recranet\OTA\Type\GuestRoomType\RoomLevelFeesAType
     */
    public function getRoomLevelFees()
    {
        return $this->roomLevelFees;
    }

    /**
     * Sets a new roomLevelFees
     *
     * Collection of fees charged at the room level.
     *
     * @param \Recranet\OTA\Type\GuestRoomType\RoomLevelFeesAType $roomLevelFees
     * @return self
     */
    public function setRoomLevelFees(?\Recranet\OTA\Type\GuestRoomType\RoomLevelFeesAType $roomLevelFees = null)
    {
        $this->roomLevelFees = $roomLevelFees;
        return $this;
    }

    /**
     * Adds as additionalGuestAmount
     *
     * Additional guest amounts which are attached to room, not rate.
     *
     * @return self
     * @param \Recranet\OTA\Type\AdditionalGuestAmountType $additionalGuestAmount
     */
    public function addToAdditionalGuestAmount(\Recranet\OTA\Type\AdditionalGuestAmountType $additionalGuestAmount)
    {
        $this->additionalGuestAmount[] = $additionalGuestAmount;
        return $this;
    }

    /**
     * isset additionalGuestAmount
     *
     * Additional guest amounts which are attached to room, not rate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalGuestAmount($index)
    {
        return isset($this->additionalGuestAmount[$index]);
    }

    /**
     * unset additionalGuestAmount
     *
     * Additional guest amounts which are attached to room, not rate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalGuestAmount($index)
    {
        unset($this->additionalGuestAmount[$index]);
    }

    /**
     * Gets as additionalGuestAmount
     *
     * Additional guest amounts which are attached to room, not rate.
     *
     * @return \Recranet\OTA\Type\AdditionalGuestAmountType[]
     */
    public function getAdditionalGuestAmount()
    {
        return $this->additionalGuestAmount;
    }

    /**
     * Sets a new additionalGuestAmount
     *
     * Additional guest amounts which are attached to room, not rate.
     *
     * @param \Recranet\OTA\Type\AdditionalGuestAmountType[] $additionalGuestAmount
     * @return self
     */
    public function setAdditionalGuestAmount(array $additionalGuestAmount = null)
    {
        $this->additionalGuestAmount = $additionalGuestAmount;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the Room.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of the Room.
     *
     * @param \Recranet\OTA\Type\ParagraphType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\Type\ParagraphType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

