<?php

namespace Recranet\OTA\Type\VehicleReservationSummaryType;

use Recranet\OTA\Type\UniqueIDType;

/**
 * Class representing ConfIDAType
 */
class ConfIDAType extends UniqueIDType
{
    /**
     * Used to specify the status of the item identified by the ConfID.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Gets as status
     *
     * Used to specify the status of the item identified by the ConfID.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Used to specify the status of the item identified by the ConfID.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}

