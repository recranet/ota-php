<?php

namespace Recranet\OTA\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType;

/**
 * Class representing ReservationMethodAType
 */
class ReservationMethodAType
{
    /**
     * The type of reservation method to be used. Refer to OpenTravel Code list Reservation Method Code (RMC).
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * The type of reservation method to be used. Refer to OpenTravel Code list Reservation Method Code (RMC).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The type of reservation method to be used. Refer to OpenTravel Code list Reservation Method Code (RMC).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
}

