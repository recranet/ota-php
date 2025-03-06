<?php

namespace Recranet\OTA\Type\OTAHotelRoomListRQ\OTAHotelRoomListRQAType;

/**
 * Class representing HotelRoomListsAType
 */
class HotelRoomListsAType
{
    /**
     * The Details which guests will occupy the rooms in a room block.
     *
     * @var \Recranet\OTA\Type\HotelRoomListType[] $hotelRoomList
     */
    private $hotelRoomList = [
        
    ];

    /**
     * Adds as hotelRoomList
     *
     * The Details which guests will occupy the rooms in a room block.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelRoomListType $hotelRoomList
     */
    public function addToHotelRoomList(\Recranet\OTA\Type\HotelRoomListType $hotelRoomList)
    {
        $this->hotelRoomList[] = $hotelRoomList;
        return $this;
    }

    /**
     * isset hotelRoomList
     *
     * The Details which guests will occupy the rooms in a room block.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelRoomList($index)
    {
        return isset($this->hotelRoomList[$index]);
    }

    /**
     * unset hotelRoomList
     *
     * The Details which guests will occupy the rooms in a room block.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelRoomList($index)
    {
        unset($this->hotelRoomList[$index]);
    }

    /**
     * Gets as hotelRoomList
     *
     * The Details which guests will occupy the rooms in a room block.
     *
     * @return \Recranet\OTA\Type\HotelRoomListType[]
     */
    public function getHotelRoomList()
    {
        return $this->hotelRoomList;
    }

    /**
     * Sets a new hotelRoomList
     *
     * The Details which guests will occupy the rooms in a room block.
     *
     * @param \Recranet\OTA\Type\HotelRoomListType[] $hotelRoomList
     * @return self
     */
    public function setHotelRoomList(array $hotelRoomList)
    {
        $this->hotelRoomList = $hotelRoomList;
        return $this;
    }
}

