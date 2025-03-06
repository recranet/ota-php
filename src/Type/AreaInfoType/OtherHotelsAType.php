<?php

namespace Recranet\OTA\Type\AreaInfoType;

/**
 * Class representing OtherHotelsAType
 */
class OtherHotelsAType
{
    /**
     * The date and time when OtherHotels was last updated.
     *
     * @var \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * Provides information on other area hotels.
     *
     * @var \Recranet\OTA\Type\AreaInfoType\OtherHotelsAType\OtherHotelAType[] $otherHotel
     */
    private $otherHotel = [
        
    ];

    /**
     * Gets as lastUpdated
     *
     * The date and time when OtherHotels was last updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when OtherHotels was last updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * Adds as otherHotel
     *
     * Provides information on other area hotels.
     *
     * @return self
     * @param \Recranet\OTA\Type\AreaInfoType\OtherHotelsAType\OtherHotelAType $otherHotel
     */
    public function addToOtherHotel(\Recranet\OTA\Type\AreaInfoType\OtherHotelsAType\OtherHotelAType $otherHotel)
    {
        $this->otherHotel[] = $otherHotel;
        return $this;
    }

    /**
     * isset otherHotel
     *
     * Provides information on other area hotels.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherHotel($index)
    {
        return isset($this->otherHotel[$index]);
    }

    /**
     * unset otherHotel
     *
     * Provides information on other area hotels.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherHotel($index)
    {
        unset($this->otherHotel[$index]);
    }

    /**
     * Gets as otherHotel
     *
     * Provides information on other area hotels.
     *
     * @return \Recranet\OTA\Type\AreaInfoType\OtherHotelsAType\OtherHotelAType[]
     */
    public function getOtherHotel()
    {
        return $this->otherHotel;
    }

    /**
     * Sets a new otherHotel
     *
     * Provides information on other area hotels.
     *
     * @param \Recranet\OTA\Type\AreaInfoType\OtherHotelsAType\OtherHotelAType[] $otherHotel
     * @return self
     */
    public function setOtherHotel(array $otherHotel)
    {
        $this->otherHotel = $otherHotel;
        return $this;
    }
}

