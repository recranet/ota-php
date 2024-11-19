<?php

namespace Recranet\OTA;

/**
 * Class representing VehicleCoreType
 *
 * The VehicleCoreType complex type identifies the core data that is used to describe a vehicle.
 * XSD Type: VehicleCoreType
 */
class VehicleCoreType
{
    /**
     * @var bool $airConditionInd
     */
    private $airConditionInd = null;

    /**
     * @var string $transmissionType
     */
    private $transmissionType = null;

    /**
     * The kind of fuel the vehicle uses.
     *
     * @var string $fuelType
     */
    private $fuelType = null;

    /**
     * Used to define the drive type of a vehicle.
     *
     * @var string $driveType
     */
    private $driveType = null;

    /**
     * The type of vehicle, for example, truck, car.
     *
     * @var \Recranet\OTA\VehicleCoreType\VehTypeAType $vehType
     */
    private $vehType = null;

    /**
     * The class of vehicle, for example, intermediate, compact.
     *
     * @var \Recranet\OTA\VehicleCoreType\VehClassAType $vehClass
     */
    private $vehClass = null;

    /**
     * Gets as airConditionInd
     *
     * @return bool
     */
    public function getAirConditionInd()
    {
        return $this->airConditionInd;
    }

    /**
     * Sets a new airConditionInd
     *
     * @param bool $airConditionInd
     * @return self
     */
    public function setAirConditionInd($airConditionInd)
    {
        $this->airConditionInd = $airConditionInd;
        return $this;
    }

    /**
     * Gets as transmissionType
     *
     * @return string
     */
    public function getTransmissionType()
    {
        return $this->transmissionType;
    }

    /**
     * Sets a new transmissionType
     *
     * @param string $transmissionType
     * @return self
     */
    public function setTransmissionType($transmissionType)
    {
        $this->transmissionType = $transmissionType;
        return $this;
    }

    /**
     * Gets as fuelType
     *
     * The kind of fuel the vehicle uses.
     *
     * @return string
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Sets a new fuelType
     *
     * The kind of fuel the vehicle uses.
     *
     * @param string $fuelType
     * @return self
     */
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
        return $this;
    }

    /**
     * Gets as driveType
     *
     * Used to define the drive type of a vehicle.
     *
     * @return string
     */
    public function getDriveType()
    {
        return $this->driveType;
    }

    /**
     * Sets a new driveType
     *
     * Used to define the drive type of a vehicle.
     *
     * @param string $driveType
     * @return self
     */
    public function setDriveType($driveType)
    {
        $this->driveType = $driveType;
        return $this;
    }

    /**
     * Gets as vehType
     *
     * The type of vehicle, for example, truck, car.
     *
     * @return \Recranet\OTA\VehicleCoreType\VehTypeAType
     */
    public function getVehType()
    {
        return $this->vehType;
    }

    /**
     * Sets a new vehType
     *
     * The type of vehicle, for example, truck, car.
     *
     * @param \Recranet\OTA\VehicleCoreType\VehTypeAType $vehType
     * @return self
     */
    public function setVehType(?\Recranet\OTA\VehicleCoreType\VehTypeAType $vehType = null)
    {
        $this->vehType = $vehType;
        return $this;
    }

    /**
     * Gets as vehClass
     *
     * The class of vehicle, for example, intermediate, compact.
     *
     * @return \Recranet\OTA\VehicleCoreType\VehClassAType
     */
    public function getVehClass()
    {
        return $this->vehClass;
    }

    /**
     * Sets a new vehClass
     *
     * The class of vehicle, for example, intermediate, compact.
     *
     * @param \Recranet\OTA\VehicleCoreType\VehClassAType $vehClass
     * @return self
     */
    public function setVehClass(?\Recranet\OTA\VehicleCoreType\VehClassAType $vehClass = null)
    {
        $this->vehClass = $vehClass;
        return $this;
    }
}

