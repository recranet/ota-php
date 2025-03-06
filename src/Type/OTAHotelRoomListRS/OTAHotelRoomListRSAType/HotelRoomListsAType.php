<?php

namespace Recranet\OTA\Type\OTAHotelRoomListRS\OTAHotelRoomListRSAType;

/**
 * Class representing HotelRoomListsAType
 */
class HotelRoomListsAType
{
    /**
     * @var \Recranet\OTA\Type\HotelRoomListType[] $hotelRoomList
     */
    private $hotelRoomList = [
        
    ];

    /**
     * Adds as hotelRoomList
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
     * @return \Recranet\OTA\Type\HotelRoomListType[]
     */
    public function getHotelRoomList()
    {
        return $this->hotelRoomList;
    }

    /**
     * Sets a new hotelRoomList
     *
     * @param \Recranet\OTA\Type\HotelRoomListType[] $hotelRoomList
     * @return self
     */
    public function setHotelRoomList(array $hotelRoomList = null)
    {
        $this->hotelRoomList = $hotelRoomList;
        return $this;
    }
}

