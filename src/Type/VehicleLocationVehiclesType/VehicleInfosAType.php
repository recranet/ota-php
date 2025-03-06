<?php

namespace Recranet\OTA\Type\VehicleLocationVehiclesType;

/**
 * Class representing VehicleInfosAType
 */
class VehicleInfosAType
{
    /**
     * Textual description about one specific aspect of the vehicles, for example, advanced booking needs, etc
     *
     * @var \Recranet\OTA\Type\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType[] $vehicleInfo
     */
    private $vehicleInfo = [
        
    ];

    /**
     * Adds as vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example, advanced booking needs, etc
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType $vehicleInfo
     */
    public function addToVehicleInfo(\Recranet\OTA\Type\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType $vehicleInfo)
    {
        $this->vehicleInfo[] = $vehicleInfo;
        return $this;
    }

    /**
     * isset vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example, advanced booking needs, etc
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleInfo($index)
    {
        return isset($this->vehicleInfo[$index]);
    }

    /**
     * unset vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example, advanced booking needs, etc
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleInfo($index)
    {
        unset($this->vehicleInfo[$index]);
    }

    /**
     * Gets as vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example, advanced booking needs, etc
     *
     * @return \Recranet\OTA\Type\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType[]
     */
    public function getVehicleInfo()
    {
        return $this->vehicleInfo;
    }

    /**
     * Sets a new vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example, advanced booking needs, etc
     *
     * @param \Recranet\OTA\Type\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType[] $vehicleInfo
     * @return self
     */
    public function setVehicleInfo(array $vehicleInfo)
    {
        $this->vehicleInfo = $vehicleInfo;
        return $this;
    }
}

