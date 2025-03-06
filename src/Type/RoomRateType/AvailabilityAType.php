<?php

namespace Recranet\OTA\Type\RoomRateType;

/**
 * Class representing AvailabilityAType
 */
class AvailabilityAType
{
    /**
     * Used to specify an availability status for the room rate.
     *
     * @var string $availabilityStatus
     */
    private $availabilityStatus = null;

    /**
     * Gets as availabilityStatus
     *
     * Used to specify an availability status for the room rate.
     *
     * @return string
     */
    public function getAvailabilityStatus()
    {
        return $this->availabilityStatus;
    }

    /**
     * Sets a new availabilityStatus
     *
     * Used to specify an availability status for the room rate.
     *
     * @param string $availabilityStatus
     * @return self
     */
    public function setAvailabilityStatus($availabilityStatus)
    {
        $this->availabilityStatus = $availabilityStatus;
        return $this;
    }
}

