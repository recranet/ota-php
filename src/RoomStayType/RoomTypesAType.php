<?php

namespace Recranet\OTA\RoomStayType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{
    /**
     * @var \Recranet\OTA\RoomTypeType[] $roomType
     */
    private $roomType = [
        
    ];

    /**
     * Adds as roomType
     *
     * @return self
     * @param \Recranet\OTA\RoomTypeType $roomType
     */
    public function addToRoomType(\Recranet\OTA\RoomTypeType $roomType)
    {
        $this->roomType[] = $roomType;
        return $this;
    }

    /**
     * isset roomType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomType($index)
    {
        return isset($this->roomType[$index]);
    }

    /**
     * unset roomType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomType($index)
    {
        unset($this->roomType[$index]);
    }

    /**
     * Gets as roomType
     *
     * @return \Recranet\OTA\RoomTypeType[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * @param \Recranet\OTA\RoomTypeType[] $roomType
     * @return self
     */
    public function setRoomType(array $roomType)
    {
        $this->roomType = $roomType;
        return $this;
    }
}

