<?php

namespace Recranet\OTA\HotelRoomListType;

/**
 * Class representing GuestsAType
 */
class GuestsAType
{
    /**
     * A person staying in a room.
     *
     * @var \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType[] $guest
     */
    private $guest = [
        
    ];

    /**
     * Adds as guest
     *
     * A person staying in a room.
     *
     * @return self
     * @param \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType $guest
     */
    public function addToGuest(\Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType $guest)
    {
        $this->guest[] = $guest;
        return $this;
    }

    /**
     * isset guest
     *
     * A person staying in a room.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuest($index)
    {
        return isset($this->guest[$index]);
    }

    /**
     * unset guest
     *
     * A person staying in a room.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuest($index)
    {
        unset($this->guest[$index]);
    }

    /**
     * Gets as guest
     *
     * A person staying in a room.
     *
     * @return \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType[]
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * Sets a new guest
     *
     * A person staying in a room.
     *
     * @param \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType[] $guest
     * @return self
     */
    public function setGuest(array $guest)
    {
        $this->guest = $guest;
        return $this;
    }
}

