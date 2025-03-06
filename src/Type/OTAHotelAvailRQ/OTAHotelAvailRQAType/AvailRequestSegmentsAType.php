<?php

namespace Recranet\OTA\Type\OTAHotelAvailRQ\OTAHotelAvailRQAType;

use Recranet\OTA\Type\AvailRequestSegmentsType;

/**
 * Class representing AvailRequestSegmentsAType
 */
class AvailRequestSegmentsAType extends AvailRequestSegmentsType
{
    /**
     * The value of this attribute will be a decimal field identifying the maximum number of seconds the responding application has to respond to the request. For example, if a client requests 10 OTA 'AvailRequestSegment' items but can only wait up to 4.0 seconds max. If only 6 segments were collected within the time-frame, the client would only receive those 6 segments within one response message.
     *
     * @var float $maximumWaitTime
     */
    private $maximumWaitTime = null;

    /**
     * Gets as maximumWaitTime
     *
     * The value of this attribute will be a decimal field identifying the maximum number of seconds the responding application has to respond to the request. For example, if a client requests 10 OTA 'AvailRequestSegment' items but can only wait up to 4.0 seconds max. If only 6 segments were collected within the time-frame, the client would only receive those 6 segments within one response message.
     *
     * @return float
     */
    public function getMaximumWaitTime()
    {
        return $this->maximumWaitTime;
    }

    /**
     * Sets a new maximumWaitTime
     *
     * The value of this attribute will be a decimal field identifying the maximum number of seconds the responding application has to respond to the request. For example, if a client requests 10 OTA 'AvailRequestSegment' items but can only wait up to 4.0 seconds max. If only 6 segments were collected within the time-frame, the client would only receive those 6 segments within one response message.
     *
     * @param float $maximumWaitTime
     * @return self
     */
    public function setMaximumWaitTime($maximumWaitTime)
    {
        $this->maximumWaitTime = $maximumWaitTime;
        return $this;
    }
}

