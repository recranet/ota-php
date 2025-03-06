<?php

namespace Recranet\OTA\Type\RoomSharesType\RoomShareAType;

/**
 * Class representing GuestRPHsAType
 */
class GuestRPHsAType
{
    /**
     * References one of the guest(s) staying in this room.
     *
     * @var \Recranet\OTA\Type\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType[] $guestRPH
     */
    private $guestRPH = [
        
    ];

    /**
     * Adds as guestRPH
     *
     * References one of the guest(s) staying in this room.
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType $guestRPH
     */
    public function addToGuestRPH(\Recranet\OTA\Type\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType $guestRPH)
    {
        $this->guestRPH[] = $guestRPH;
        return $this;
    }

    /**
     * isset guestRPH
     *
     * References one of the guest(s) staying in this room.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestRPH($index)
    {
        return isset($this->guestRPH[$index]);
    }

    /**
     * unset guestRPH
     *
     * References one of the guest(s) staying in this room.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestRPH($index)
    {
        unset($this->guestRPH[$index]);
    }

    /**
     * Gets as guestRPH
     *
     * References one of the guest(s) staying in this room.
     *
     * @return \Recranet\OTA\Type\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType[]
     */
    public function getGuestRPH()
    {
        return $this->guestRPH;
    }

    /**
     * Sets a new guestRPH
     *
     * References one of the guest(s) staying in this room.
     *
     * @param \Recranet\OTA\Type\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType[] $guestRPH
     * @return self
     */
    public function setGuestRPH(array $guestRPH)
    {
        $this->guestRPH = $guestRPH;
        return $this;
    }
}

