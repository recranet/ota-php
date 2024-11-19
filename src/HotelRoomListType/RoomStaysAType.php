<?php

namespace Recranet\OTA\HotelRoomListType;

/**
 * Class representing RoomStaysAType
 */
class RoomStaysAType
{
    /**
     * Details the success, failure and warnings for the RoomStay.
     *
     * @var \Recranet\OTA\HotelRoomListType\RoomStaysAType\RoomStayAType[] $roomStay
     */
    private $roomStay = [
        
    ];

    /**
     * Adds as roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @return self
     * @param \Recranet\OTA\HotelRoomListType\RoomStaysAType\RoomStayAType $roomStay
     */
    public function addToRoomStay(\Recranet\OTA\HotelRoomListType\RoomStaysAType\RoomStayAType $roomStay)
    {
        $this->roomStay[] = $roomStay;
        return $this;
    }

    /**
     * isset roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomStay($index)
    {
        return isset($this->roomStay[$index]);
    }

    /**
     * unset roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomStay($index)
    {
        unset($this->roomStay[$index]);
    }

    /**
     * Gets as roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @return \Recranet\OTA\HotelRoomListType\RoomStaysAType\RoomStayAType[]
     */
    public function getRoomStay()
    {
        return $this->roomStay;
    }

    /**
     * Sets a new roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @param \Recranet\OTA\HotelRoomListType\RoomStaysAType\RoomStayAType[] $roomStay
     * @return self
     */
    public function setRoomStay(array $roomStay)
    {
        $this->roomStay = $roomStay;
        return $this;
    }
}

