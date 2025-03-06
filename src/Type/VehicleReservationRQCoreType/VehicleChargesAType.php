<?php

namespace Recranet\OTA\Type\VehicleReservationRQCoreType;

/**
 * Class representing VehicleChargesAType
 */
class VehicleChargesAType
{
    /**
     * @var \Recranet\OTA\Type\VehicleChargePurposeType[] $vehicleCharge
     */
    private $vehicleCharge = [
        
    ];

    /**
     * Adds as vehicleCharge
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleChargePurposeType $vehicleCharge
     */
    public function addToVehicleCharge(\Recranet\OTA\Type\VehicleChargePurposeType $vehicleCharge)
    {
        $this->vehicleCharge[] = $vehicleCharge;
        return $this;
    }

    /**
     * isset vehicleCharge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleCharge($index)
    {
        return isset($this->vehicleCharge[$index]);
    }

    /**
     * unset vehicleCharge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleCharge($index)
    {
        unset($this->vehicleCharge[$index]);
    }

    /**
     * Gets as vehicleCharge
     *
     * @return \Recranet\OTA\Type\VehicleChargePurposeType[]
     */
    public function getVehicleCharge()
    {
        return $this->vehicleCharge;
    }

    /**
     * Sets a new vehicleCharge
     *
     * @param \Recranet\OTA\Type\VehicleChargePurposeType[] $vehicleCharge
     * @return self
     */
    public function setVehicleCharge(array $vehicleCharge)
    {
        $this->vehicleCharge = $vehicleCharge;
        return $this;
    }
}

