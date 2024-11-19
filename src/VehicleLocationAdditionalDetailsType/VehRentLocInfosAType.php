<?php

namespace Recranet\OTA\VehicleLocationAdditionalDetailsType;

/**
 * Class representing VehRentLocInfosAType
 */
class VehRentLocInfosAType
{
    /**
     * Descriptive information of one specific aspect of the rental location.
     *
     * @var \Recranet\OTA\VehicleLocationInformationType[] $vehRentLocInfo
     */
    private $vehRentLocInfo = [
        
    ];

    /**
     * Adds as vehRentLocInfo
     *
     * Descriptive information of one specific aspect of the rental location.
     *
     * @return self
     * @param \Recranet\OTA\VehicleLocationInformationType $vehRentLocInfo
     */
    public function addToVehRentLocInfo(\Recranet\OTA\VehicleLocationInformationType $vehRentLocInfo)
    {
        $this->vehRentLocInfo[] = $vehRentLocInfo;
        return $this;
    }

    /**
     * isset vehRentLocInfo
     *
     * Descriptive information of one specific aspect of the rental location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehRentLocInfo($index)
    {
        return isset($this->vehRentLocInfo[$index]);
    }

    /**
     * unset vehRentLocInfo
     *
     * Descriptive information of one specific aspect of the rental location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehRentLocInfo($index)
    {
        unset($this->vehRentLocInfo[$index]);
    }

    /**
     * Gets as vehRentLocInfo
     *
     * Descriptive information of one specific aspect of the rental location.
     *
     * @return \Recranet\OTA\VehicleLocationInformationType[]
     */
    public function getVehRentLocInfo()
    {
        return $this->vehRentLocInfo;
    }

    /**
     * Sets a new vehRentLocInfo
     *
     * Descriptive information of one specific aspect of the rental location.
     *
     * @param \Recranet\OTA\VehicleLocationInformationType[] $vehRentLocInfo
     * @return self
     */
    public function setVehRentLocInfo(array $vehRentLocInfo)
    {
        $this->vehRentLocInfo = $vehRentLocInfo;
        return $this;
    }
}

