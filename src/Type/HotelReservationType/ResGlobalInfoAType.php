<?php

namespace Recranet\OTA\Type\HotelReservationType;

use Recranet\OTA\Type\ResGlobalInfoType;

/**
 * Class representing ResGlobalInfoAType
 */
class ResGlobalInfoAType extends ResGlobalInfoType
{
    /**
     * Property information for the reservation.
     *
     * @var \Recranet\OTA\Type\BasicPropertyInfoType $basicPropertyInfo
     */
    private $basicPropertyInfo = null;

    /**
     * Gets as basicPropertyInfo
     *
     * Property information for the reservation.
     *
     * @return \Recranet\OTA\Type\BasicPropertyInfoType
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
     * @param \Recranet\OTA\Type\BasicPropertyInfoType $basicPropertyInfo
     * @return self
     */
    public function setBasicPropertyInfo(\Recranet\OTA\Type\BasicPropertyInfoType $basicPropertyInfo)
    {
        $this->basicPropertyInfo = $basicPropertyInfo;
        return $this;
    }
}

