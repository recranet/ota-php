<?php

namespace Recranet\OTA;

/**
 * Class representing GuestCountType
 *
 * A collection of GuestCount by age group.
 * XSD Type: GuestCountType
 */
class GuestCountType
{
    /**
     * IsPerRoom means that the guests defined in the GuestCounts object apply to each room in the NumberOfRooms for the RoomStay. Value of "false" means that the guests defined in the GuestCounts object apply to all rooms combined in the NumberOfRooms for the RoomStay.
     *
     * @var bool $isPerRoom
     */
    private $isPerRoom = null;

    /**
     * A recurring element that identifies the number of guests and ages of the guests.
     *
     * @var \Recranet\OTA\GuestCountType\GuestCountAType[] $guestCount
     */
    private $guestCount = [
        
    ];

    /**
     * Gets as isPerRoom
     *
     * IsPerRoom means that the guests defined in the GuestCounts object apply to each room in the NumberOfRooms for the RoomStay. Value of "false" means that the guests defined in the GuestCounts object apply to all rooms combined in the NumberOfRooms for the RoomStay.
     *
     * @return bool
     */
    public function getIsPerRoom()
    {
        return $this->isPerRoom;
    }

    /**
     * Sets a new isPerRoom
     *
     * IsPerRoom means that the guests defined in the GuestCounts object apply to each room in the NumberOfRooms for the RoomStay. Value of "false" means that the guests defined in the GuestCounts object apply to all rooms combined in the NumberOfRooms for the RoomStay.
     *
     * @param bool $isPerRoom
     * @return self
     */
    public function setIsPerRoom($isPerRoom)
    {
        $this->isPerRoom = $isPerRoom;
        return $this;
    }

    /**
     * Adds as guestCount
     *
     * A recurring element that identifies the number of guests and ages of the guests.
     *
     * @return self
     * @param \Recranet\OTA\GuestCountType\GuestCountAType $guestCount
     */
    public function addToGuestCount(\Recranet\OTA\GuestCountType\GuestCountAType $guestCount)
    {
        $this->guestCount[] = $guestCount;
        return $this;
    }

    /**
     * isset guestCount
     *
     * A recurring element that identifies the number of guests and ages of the guests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestCount($index)
    {
        return isset($this->guestCount[$index]);
    }

    /**
     * unset guestCount
     *
     * A recurring element that identifies the number of guests and ages of the guests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestCount($index)
    {
        unset($this->guestCount[$index]);
    }

    /**
     * Gets as guestCount
     *
     * A recurring element that identifies the number of guests and ages of the guests.
     *
     * @return \Recranet\OTA\GuestCountType\GuestCountAType[]
     */
    public function getGuestCount()
    {
        return $this->guestCount;
    }

    /**
     * Sets a new guestCount
     *
     * A recurring element that identifies the number of guests and ages of the guests.
     *
     * @param \Recranet\OTA\GuestCountType\GuestCountAType[] $guestCount
     * @return self
     */
    public function setGuestCount(array $guestCount)
    {
        $this->guestCount = $guestCount;
        return $this;
    }
}

