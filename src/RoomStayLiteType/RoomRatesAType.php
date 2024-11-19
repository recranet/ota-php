<?php

namespace Recranet\OTA\RoomStayLiteType;

/**
 * Class representing RoomRatesAType
 */
class RoomRatesAType
{
    /**
     * @var \Recranet\OTA\RoomRateLiteType[] $roomRate
     */
    private $roomRate = [
        
    ];

    /**
     * Adds as roomRate
     *
     * @return self
     * @param \Recranet\OTA\RoomRateLiteType $roomRate
     */
    public function addToRoomRate(\Recranet\OTA\RoomRateLiteType $roomRate)
    {
        $this->roomRate[] = $roomRate;
        return $this;
    }

    /**
     * isset roomRate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomRate($index)
    {
        return isset($this->roomRate[$index]);
    }

    /**
     * unset roomRate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomRate($index)
    {
        unset($this->roomRate[$index]);
    }

    /**
     * Gets as roomRate
     *
     * @return \Recranet\OTA\RoomRateLiteType[]
     */
    public function getRoomRate()
    {
        return $this->roomRate;
    }

    /**
     * Sets a new roomRate
     *
     * @param \Recranet\OTA\RoomRateLiteType[] $roomRate
     * @return self
     */
    public function setRoomRate(array $roomRate)
    {
        $this->roomRate = $roomRate;
        return $this;
    }
}

