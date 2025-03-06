<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RoomSharesType
 *
 * A collection of RoomShare.
 * XSD Type: RoomSharesType
 */
class RoomSharesType
{
    /**
     * Guests to share a room.
     *
     * @var \Recranet\OTA\Type\RoomSharesType\RoomShareAType[] $roomShare
     */
    private $roomShare = [
        
    ];

    /**
     * Adds as roomShare
     *
     * Guests to share a room.
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomSharesType\RoomShareAType $roomShare
     */
    public function addToRoomShare(\Recranet\OTA\Type\RoomSharesType\RoomShareAType $roomShare)
    {
        $this->roomShare[] = $roomShare;
        return $this;
    }

    /**
     * isset roomShare
     *
     * Guests to share a room.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomShare($index)
    {
        return isset($this->roomShare[$index]);
    }

    /**
     * unset roomShare
     *
     * Guests to share a room.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomShare($index)
    {
        unset($this->roomShare[$index]);
    }

    /**
     * Gets as roomShare
     *
     * Guests to share a room.
     *
     * @return \Recranet\OTA\Type\RoomSharesType\RoomShareAType[]
     */
    public function getRoomShare()
    {
        return $this->roomShare;
    }

    /**
     * Sets a new roomShare
     *
     * Guests to share a room.
     *
     * @param \Recranet\OTA\Type\RoomSharesType\RoomShareAType[] $roomShare
     * @return self
     */
    public function setRoomShare(array $roomShare)
    {
        $this->roomShare = $roomShare;
        return $this;
    }
}

