<?php

namespace Recranet\OTA\Type\HotelProductType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{
    /**
     * An individual room type.
     *
     * @var \Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType[] $roomType
     */
    private $roomType = [
        
    ];

    /**
     * Adds as roomType
     *
     * An individual room type.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType $roomType
     */
    public function addToRoomType(\Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType $roomType)
    {
        $this->roomType[] = $roomType;
        return $this;
    }

    /**
     * isset roomType
     *
     * An individual room type.
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
     * An individual room type.
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
     * An individual room type.
     *
     * @return \Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * An individual room type.
     *
     * @param \Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType[] $roomType
     * @return self
     */
    public function setRoomType(array $roomType)
    {
        $this->roomType = $roomType;
        return $this;
    }
}

