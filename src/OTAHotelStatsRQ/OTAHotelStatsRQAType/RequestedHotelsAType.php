<?php

namespace Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType;

/**
 * Class representing RequestedHotelsAType
 */
class RequestedHotelsAType
{
    /**
     * Identifies each hotel or set of hotels for which reports are being requested.
     *
     * @var \Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType\RequestedHotelsAType\RequestedHotelAType[] $requestedHotel
     */
    private $requestedHotel = [
        
    ];

    /**
     * Adds as requestedHotel
     *
     * Identifies each hotel or set of hotels for which reports are being requested.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType\RequestedHotelsAType\RequestedHotelAType $requestedHotel
     */
    public function addToRequestedHotel(\Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType\RequestedHotelsAType\RequestedHotelAType $requestedHotel)
    {
        $this->requestedHotel[] = $requestedHotel;
        return $this;
    }

    /**
     * isset requestedHotel
     *
     * Identifies each hotel or set of hotels for which reports are being requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestedHotel($index)
    {
        return isset($this->requestedHotel[$index]);
    }

    /**
     * unset requestedHotel
     *
     * Identifies each hotel or set of hotels for which reports are being requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestedHotel($index)
    {
        unset($this->requestedHotel[$index]);
    }

    /**
     * Gets as requestedHotel
     *
     * Identifies each hotel or set of hotels for which reports are being requested.
     *
     * @return \Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType\RequestedHotelsAType\RequestedHotelAType[]
     */
    public function getRequestedHotel()
    {
        return $this->requestedHotel;
    }

    /**
     * Sets a new requestedHotel
     *
     * Identifies each hotel or set of hotels for which reports are being requested.
     *
     * @param \Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType\RequestedHotelsAType\RequestedHotelAType[] $requestedHotel
     * @return self
     */
    public function setRequestedHotel(array $requestedHotel)
    {
        $this->requestedHotel = $requestedHotel;
        return $this;
    }
}

