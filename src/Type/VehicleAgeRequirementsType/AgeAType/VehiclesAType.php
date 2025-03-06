<?php

namespace Recranet\OTA\Type\VehicleAgeRequirementsType\AgeAType;

/**
 * Class representing VehiclesAType
 */
class VehiclesAType
{
    /**
     * Identifies a specific vehicle type.
     *
     * @var \Recranet\OTA\Type\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType[] $vehicle
     */
    private $vehicle = [
        
    ];

    /**
     * Adds as vehicle
     *
     * Identifies a specific vehicle type.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType $vehicle
     */
    public function addToVehicle(\Recranet\OTA\Type\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType $vehicle)
    {
        $this->vehicle[] = $vehicle;
        return $this;
    }

    /**
     * isset vehicle
     *
     * Identifies a specific vehicle type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicle($index)
    {
        return isset($this->vehicle[$index]);
    }

    /**
     * unset vehicle
     *
     * Identifies a specific vehicle type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicle($index)
    {
        unset($this->vehicle[$index]);
    }

    /**
     * Gets as vehicle
     *
     * Identifies a specific vehicle type.
     *
     * @return \Recranet\OTA\Type\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Identifies a specific vehicle type.
     *
     * @param \Recranet\OTA\Type\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType[] $vehicle
     * @return self
     */
    public function setVehicle(array $vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }
}

