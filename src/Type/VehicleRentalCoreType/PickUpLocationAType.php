<?php

namespace Recranet\OTA\Type\VehicleRentalCoreType;

use Recranet\OTA\Type\LocationType;

/**
 * Class representing PickUpLocationAType
 */
class PickUpLocationAType extends LocationType
{
    /**
     * Specifies a unique location code (e.g., ATLC10).
     *
     * @var string $extendedLocationCode
     */
    private $extendedLocationCode = null;

    /**
     * Identifies the location of a car rental site for an airport/city code. Refer to OpenTravel Code List Vehicle Where At Facility (VWF).
     *
     * @var string $counterLocation
     */
    private $counterLocation = null;

    /**
     * Gets as extendedLocationCode
     *
     * Specifies a unique location code (e.g., ATLC10).
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
     * Specifies a unique location code (e.g., ATLC10).
     *
     * @param string $extendedLocationCode
     * @return self
     */
    public function setExtendedLocationCode($extendedLocationCode)
    {
        $this->extendedLocationCode = $extendedLocationCode;
        return $this;
    }

    /**
     * Gets as counterLocation
     *
     * Identifies the location of a car rental site for an airport/city code. Refer to OpenTravel Code List Vehicle Where At Facility (VWF).
     *
     * @return string
     */
    public function getCounterLocation()
    {
        return $this->counterLocation;
    }

    /**
     * Sets a new counterLocation
     *
     * Identifies the location of a car rental site for an airport/city code. Refer to OpenTravel Code List Vehicle Where At Facility (VWF).
     *
     * @param string $counterLocation
     * @return self
     */
    public function setCounterLocation($counterLocation)
    {
        $this->counterLocation = $counterLocation;
        return $this;
    }
}

