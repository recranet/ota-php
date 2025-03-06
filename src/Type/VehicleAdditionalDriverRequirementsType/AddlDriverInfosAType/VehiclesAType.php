<?php

namespace Recranet\OTA\Type\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType;

/**
 * Class representing VehiclesAType
 */
class VehiclesAType
{
    /**
     * To identify a vehicle type associated with additional driver information.
     *
     * @var \Recranet\OTA\Type\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType[] $vehicle
     */
    private $vehicle = [
        
    ];

    /**
     * Adds as vehicle
     *
     * To identify a vehicle type associated with additional driver information.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType $vehicle
     */
    public function addToVehicle(\Recranet\OTA\Type\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType $vehicle)
    {
        $this->vehicle[] = $vehicle;
        return $this;
    }

    /**
     * isset vehicle
     *
     * To identify a vehicle type associated with additional driver information.
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
     * To identify a vehicle type associated with additional driver information.
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
     * To identify a vehicle type associated with additional driver information.
     *
     * @return \Recranet\OTA\Type\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * To identify a vehicle type associated with additional driver information.
     *
     * @param \Recranet\OTA\Type\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType[] $vehicle
     * @return self
     */
    public function setVehicle(array $vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }
}

