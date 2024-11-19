<?php

namespace Recranet\OTA\AccountSpecificInformationType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{
    /**
     * Defines each room type included in Client negotiated rate.
     *
     * @var \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[] $roomType
     */
    private $roomType = [
        
    ];

    /**
     * Adds as roomType
     *
     * Defines each room type included in Client negotiated rate.
     *
     * @return self
     * @param \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType $roomType
     */
    public function addToRoomType(\Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType $roomType)
    {
        $this->roomType[] = $roomType;
        return $this;
    }

    /**
     * isset roomType
     *
     * Defines each room type included in Client negotiated rate.
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
     * Defines each room type included in Client negotiated rate.
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
     * Defines each room type included in Client negotiated rate.
     *
     * @return \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * Defines each room type included in Client negotiated rate.
     *
     * @param \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[] $roomType
     * @return self
     */
    public function setRoomType(array $roomType)
    {
        $this->roomType = $roomType;
        return $this;
    }
}

