<?php

namespace Recranet\OTA\FacilityInfoType;

/**
 * Class representing GuestRoomsAType
 */
class GuestRoomsAType
{
    /**
     * Maximum number of guests the hotel can accommodate at one time.
     *
     * @var int $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * The accommodation occupied by a guest.
     *
     * @var \Recranet\OTA\FacilityInfoType\GuestRoomsAType\GuestRoomAType[] $guestRoom
     */
    private $guestRoom = [
        
    ];

    /**
     * Gets as maxOccupancy
     *
     * Maximum number of guests the hotel can accommodate at one time.
     *
     * @return int
     */
    public function getMaxOccupancy()
    {
        return $this->maxOccupancy;
    }

    /**
     * Sets a new maxOccupancy
     *
     * Maximum number of guests the hotel can accommodate at one time.
     *
     * @param int $maxOccupancy
     * @return self
     */
    public function setMaxOccupancy($maxOccupancy)
    {
        $this->maxOccupancy = $maxOccupancy;
        return $this;
    }

    /**
     * Adds as guestRoom
     *
     * The accommodation occupied by a guest.
     *
     * @return self
     * @param \Recranet\OTA\FacilityInfoType\GuestRoomsAType\GuestRoomAType $guestRoom
     */
    public function addToGuestRoom(\Recranet\OTA\FacilityInfoType\GuestRoomsAType\GuestRoomAType $guestRoom)
    {
        $this->guestRoom[] = $guestRoom;
        return $this;
    }

    /**
     * isset guestRoom
     *
     * The accommodation occupied by a guest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestRoom($index)
    {
        return isset($this->guestRoom[$index]);
    }

    /**
     * unset guestRoom
     *
     * The accommodation occupied by a guest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestRoom($index)
    {
        unset($this->guestRoom[$index]);
    }

    /**
     * Gets as guestRoom
     *
     * The accommodation occupied by a guest.
     *
     * @return \Recranet\OTA\FacilityInfoType\GuestRoomsAType\GuestRoomAType[]
     */
    public function getGuestRoom()
    {
        return $this->guestRoom;
    }

    /**
     * Sets a new guestRoom
     *
     * The accommodation occupied by a guest.
     *
     * @param \Recranet\OTA\FacilityInfoType\GuestRoomsAType\GuestRoomAType[] $guestRoom
     * @return self
     */
    public function setGuestRoom(array $guestRoom = null)
    {
        $this->guestRoom = $guestRoom;
        return $this;
    }
}

