<?php

namespace Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType;

/**
 * Class representing HotelInvBlockRequestsAType
 */
class HotelInvBlockRequestsAType
{
    /**
     * Provides the criteria to identify the date range, inventory blocks and hotels to be returned.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType[] $hotelInvBlockRequest
     */
    private $hotelInvBlockRequest = [
        
    ];

    /**
     * Adds as hotelInvBlockRequest
     *
     * Provides the criteria to identify the date range, inventory blocks and hotels to be returned.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType $hotelInvBlockRequest
     */
    public function addToHotelInvBlockRequest(\Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType $hotelInvBlockRequest)
    {
        $this->hotelInvBlockRequest[] = $hotelInvBlockRequest;
        return $this;
    }

    /**
     * isset hotelInvBlockRequest
     *
     * Provides the criteria to identify the date range, inventory blocks and hotels to be returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelInvBlockRequest($index)
    {
        return isset($this->hotelInvBlockRequest[$index]);
    }

    /**
     * unset hotelInvBlockRequest
     *
     * Provides the criteria to identify the date range, inventory blocks and hotels to be returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelInvBlockRequest($index)
    {
        unset($this->hotelInvBlockRequest[$index]);
    }

    /**
     * Gets as hotelInvBlockRequest
     *
     * Provides the criteria to identify the date range, inventory blocks and hotels to be returned.
     *
     * @return \Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType[]
     */
    public function getHotelInvBlockRequest()
    {
        return $this->hotelInvBlockRequest;
    }

    /**
     * Sets a new hotelInvBlockRequest
     *
     * Provides the criteria to identify the date range, inventory blocks and hotels to be returned.
     *
     * @param \Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType[] $hotelInvBlockRequest
     * @return self
     */
    public function setHotelInvBlockRequest(array $hotelInvBlockRequest)
    {
        $this->hotelInvBlockRequest = $hotelInvBlockRequest;
        return $this;
    }
}

