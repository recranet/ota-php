<?php

namespace Recranet\OTA\Type\RoomStayType\RoomRatesAType\RoomRateAType;

/**
 * Class representing GuestCountsAType
 */
class GuestCountsAType
{
    /**
     * A recurring element that identifies the number of guests and ages of the guests.
     *
     * @var \Recranet\OTA\Type\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType[] $guestCount
     */
    private $guestCount = [
        
    ];

    /**
     * Adds as guestCount
     *
     * A recurring element that identifies the number of guests and ages of the guests.
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType $guestCount
     */
    public function addToGuestCount(\Recranet\OTA\Type\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType $guestCount)
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
     * @return \Recranet\OTA\Type\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType[]
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
     * @param \Recranet\OTA\Type\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType[] $guestCount
     * @return self
     */
    public function setGuestCount(array $guestCount)
    {
        $this->guestCount = $guestCount;
        return $this;
    }
}

