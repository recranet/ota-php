<?php

namespace Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType;

use Recranet\OTA\Type\LocationType;

/**
 * Class representing OneWayDropLocationAType
 */
class OneWayDropLocationAType extends LocationType
{
    /**
     * Used for extended OAG code in conjunction with the OAG code which is sent in Code.
     *
     * @var string $extendedLocationCode
     */
    private $extendedLocationCode = null;

    /**
     * Gets as extendedLocationCode
     *
     * Used for extended OAG code in conjunction with the OAG code which is sent in Code.
     *
     * @return string
     */
    public function getExtendedLocationCode()
    {
        return $this->extendedLocationCode;
    }

    /**
     * Sets a new extendedLocationCode
     *
     * Used for extended OAG code in conjunction with the OAG code which is sent in Code.
     *
     * @param string $extendedLocationCode
     * @return self
     */
    public function setExtendedLocationCode($extendedLocationCode)
    {
        $this->extendedLocationCode = $extendedLocationCode;
        return $this;
    }
}

