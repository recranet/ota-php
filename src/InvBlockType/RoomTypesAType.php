<?php

namespace Recranet\OTA\InvBlockType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{
    /**
     * This is a specific room type defined within an inventory block.
     *
     * @var \Recranet\OTA\InvBlockRoomType[] $roomType
     */
    private $roomType = [
        
    ];

    /**
     * Adds as roomType
     *
     * This is a specific room type defined within an inventory block.
     *
     * @return self
     * @param \Recranet\OTA\InvBlockRoomType $roomType
     */
    public function addToRoomType(\Recranet\OTA\InvBlockRoomType $roomType)
    {
        $this->roomType[] = $roomType;
        return $this;
    }

    /**
     * isset roomType
     *
     * This is a specific room type defined within an inventory block.
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
     * This is a specific room type defined within an inventory block.
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
     * This is a specific room type defined within an inventory block.
     *
     * @return \Recranet\OTA\InvBlockRoomType[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * This is a specific room type defined within an inventory block.
     *
     * @param \Recranet\OTA\InvBlockRoomType[] $roomType
     * @return self
     */
    public function setRoomType(array $roomType)
    {
        $this->roomType = $roomType;
        return $this;
    }
}

