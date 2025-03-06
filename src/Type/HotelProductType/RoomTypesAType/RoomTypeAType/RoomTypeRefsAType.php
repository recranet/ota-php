<?php

namespace Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType;

/**
 * Class representing RoomTypeRefsAType
 */
class RoomTypeRefsAType
{
    /**
     * Specifies the room type code for other systems.
     *
     * @var \Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType[] $roomTypeRef
     */
    private $roomTypeRef = [
        
    ];

    /**
     * Adds as roomTypeRef
     *
     * Specifies the room type code for other systems.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType $roomTypeRef
     */
    public function addToRoomTypeRef(\Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType $roomTypeRef)
    {
        $this->roomTypeRef[] = $roomTypeRef;
        return $this;
    }

    /**
     * isset roomTypeRef
     *
     * Specifies the room type code for other systems.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomTypeRef($index)
    {
        return isset($this->roomTypeRef[$index]);
    }

    /**
     * unset roomTypeRef
     *
     * Specifies the room type code for other systems.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomTypeRef($index)
    {
        unset($this->roomTypeRef[$index]);
    }

    /**
     * Gets as roomTypeRef
     *
     * Specifies the room type code for other systems.
     *
     * @return \Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType[]
     */
    public function getRoomTypeRef()
    {
        return $this->roomTypeRef;
    }

    /**
     * Sets a new roomTypeRef
     *
     * Specifies the room type code for other systems.
     *
     * @param \Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType[] $roomTypeRef
     * @return self
     */
    public function setRoomTypeRef(array $roomTypeRef)
    {
        $this->roomTypeRef = $roomTypeRef;
        return $this;
    }
}

