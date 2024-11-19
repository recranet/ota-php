<?php

namespace Recranet\OTA\OTAHotelInvCountRQ\OTAHotelInvCountRQAType;

/**
 * Class representing HotelInvCountRequestsAType
 */
class HotelInvCountRequestsAType
{
    /**
     * Provides the criteria to identify the date range and room type inventory to be returned.
     *
     * @var \Recranet\OTA\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType[] $hotelInvCountRequest
     */
    private $hotelInvCountRequest = [
        
    ];

    /**
     * Adds as hotelInvCountRequest
     *
     * Provides the criteria to identify the date range and room type inventory to be returned.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType $hotelInvCountRequest
     */
    public function addToHotelInvCountRequest(\Recranet\OTA\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType $hotelInvCountRequest)
    {
        $this->hotelInvCountRequest[] = $hotelInvCountRequest;
        return $this;
    }

    /**
     * isset hotelInvCountRequest
     *
     * Provides the criteria to identify the date range and room type inventory to be returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelInvCountRequest($index)
    {
        return isset($this->hotelInvCountRequest[$index]);
    }

    /**
     * unset hotelInvCountRequest
     *
     * Provides the criteria to identify the date range and room type inventory to be returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelInvCountRequest($index)
    {
        unset($this->hotelInvCountRequest[$index]);
    }

    /**
     * Gets as hotelInvCountRequest
     *
     * Provides the criteria to identify the date range and room type inventory to be returned.
     *
     * @return \Recranet\OTA\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType[]
     */
    public function getHotelInvCountRequest()
    {
        return $this->hotelInvCountRequest;
    }

    /**
     * Sets a new hotelInvCountRequest
     *
     * Provides the criteria to identify the date range and room type inventory to be returned.
     *
     * @param \Recranet\OTA\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType[] $hotelInvCountRequest
     * @return self
     */
    public function setHotelInvCountRequest(array $hotelInvCountRequest)
    {
        $this->hotelInvCountRequest = $hotelInvCountRequest;
        return $this;
    }
}

