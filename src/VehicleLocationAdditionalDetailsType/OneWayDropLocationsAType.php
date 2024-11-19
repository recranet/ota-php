<?php

namespace Recranet\OTA\VehicleLocationAdditionalDetailsType;

/**
 * Class representing OneWayDropLocationsAType
 */
class OneWayDropLocationsAType
{
    /**
     * Location where a one way drop is allowed.
     *
     * @var \Recranet\OTA\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[] $oneWayDropLocation
     */
    private $oneWayDropLocation = [
        
    ];

    /**
     * Adds as oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @return self
     * @param \Recranet\OTA\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType $oneWayDropLocation
     */
    public function addToOneWayDropLocation(\Recranet\OTA\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType $oneWayDropLocation)
    {
        $this->oneWayDropLocation[] = $oneWayDropLocation;
        return $this;
    }

    /**
     * isset oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOneWayDropLocation($index)
    {
        return isset($this->oneWayDropLocation[$index]);
    }

    /**
     * unset oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOneWayDropLocation($index)
    {
        unset($this->oneWayDropLocation[$index]);
    }

    /**
     * Gets as oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @return \Recranet\OTA\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[]
     */
    public function getOneWayDropLocation()
    {
        return $this->oneWayDropLocation;
    }

    /**
     * Sets a new oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @param \Recranet\OTA\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[] $oneWayDropLocation
     * @return self
     */
    public function setOneWayDropLocation(array $oneWayDropLocation)
    {
        $this->oneWayDropLocation = $oneWayDropLocation;
        return $this;
    }
}

