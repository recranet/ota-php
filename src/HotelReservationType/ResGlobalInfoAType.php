<?php

namespace Recranet\OTA\HotelReservationType;

use Recranet\OTA\ResGlobalInfoType;

/**
 * Class representing ResGlobalInfoAType
 */
class ResGlobalInfoAType extends ResGlobalInfoType
{
    /**
     * Property information for the reservation.
     *
     * @var \Recranet\OTA\BasicPropertyInfoType $basicPropertyInfo
     */
    private $basicPropertyInfo = null;

    /**
     * Gets as basicPropertyInfo
     *
     * Property information for the reservation.
     *
     * @return \Recranet\OTA\BasicPropertyInfoType
     */
    public function getBasicPropertyInfo()
    {
        return $this->basicPropertyInfo;
    }

    /**
     * Sets a new basicPropertyInfo
     *
     * Property information for the reservation.
     *
     * @param \Recranet\OTA\BasicPropertyInfoType $basicPropertyInfo
     * @return self
     */
    public function setBasicPropertyInfo(\Recranet\OTA\BasicPropertyInfoType $basicPropertyInfo)
    {
        $this->basicPropertyInfo = $basicPropertyInfo;
        return $this;
    }
}

