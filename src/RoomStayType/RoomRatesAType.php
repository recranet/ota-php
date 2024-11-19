<?php

namespace Recranet\OTA\RoomStayType;

/**
 * Class representing RoomRatesAType
 */
class RoomRatesAType
{
    /**
     * When true, indicates more rates exist. When false, all rate information is provided.
     *
     * @var bool $moreRatesExistInd
     */
    private $moreRatesExistInd = null;

    /**
     * @var \Recranet\OTA\RoomStayType\RoomRatesAType\RoomRateAType[] $roomRate
     */
    private $roomRate = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as moreRatesExistInd
     *
     * When true, indicates more rates exist. When false, all rate information is provided.
     *
     * @return bool
     */
    public function getMoreRatesExistInd()
    {
        return $this->moreRatesExistInd;
    }

    /**
     * Sets a new moreRatesExistInd
     *
     * When true, indicates more rates exist. When false, all rate information is provided.
     *
     * @param bool $moreRatesExistInd
     * @return self
     */
    public function setMoreRatesExistInd($moreRatesExistInd)
    {
        $this->moreRatesExistInd = $moreRatesExistInd;
        return $this;
    }

    /**
     * Adds as roomRate
     *
     * @return self
     * @param \Recranet\OTA\RoomStayType\RoomRatesAType\RoomRateAType $roomRate
     */
    public function addToRoomRate(\Recranet\OTA\RoomStayType\RoomRatesAType\RoomRateAType $roomRate)
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
     * @return \Recranet\OTA\RoomStayType\RoomRatesAType\RoomRateAType[]
     */
    public function getRoomRate()
    {
        return $this->roomRate;
    }

    /**
     * Sets a new roomRate
     *
     * @param \Recranet\OTA\RoomStayType\RoomRatesAType\RoomRateAType[] $roomRate
     * @return self
     */
    public function setRoomRate(array $roomRate)
    {
        $this->roomRate = $roomRate;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

