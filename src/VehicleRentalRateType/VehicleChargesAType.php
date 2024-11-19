<?php

namespace Recranet\OTA\VehicleRentalRateType;

/**
 * Class representing VehicleChargesAType
 */
class VehicleChargesAType
{
    /**
     * Detailed information on one specific charge including an indication of the type of charge.
     *
     * @var \Recranet\OTA\VehicleChargePurposeType[] $vehicleCharge
     */
    private $vehicleCharge = [
        
    ];

    /**
     * Adds as vehicleCharge
     *
     * Detailed information on one specific charge including an indication of the type of charge.
     *
     * @return self
     * @param \Recranet\OTA\VehicleChargePurposeType $vehicleCharge
     */
    public function addToVehicleCharge(\Recranet\OTA\VehicleChargePurposeType $vehicleCharge)
    {
        $this->vehicleCharge[] = $vehicleCharge;
        return $this;
    }

    /**
     * isset vehicleCharge
     *
     * Detailed information on one specific charge including an indication of the type of charge.
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
     * Detailed information on one specific charge including an indication of the type of charge.
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
     * Detailed information on one specific charge including an indication of the type of charge.
     *
     * @return \Recranet\OTA\VehicleChargePurposeType[]
     */
    public function getVehicleCharge()
    {
        return $this->vehicleCharge;
    }

    /**
     * Sets a new vehicleCharge
     *
     * Detailed information on one specific charge including an indication of the type of charge.
     *
     * @param \Recranet\OTA\VehicleChargePurposeType[] $vehicleCharge
     * @return self
     */
    public function setVehicleCharge(array $vehicleCharge)
    {
        $this->vehicleCharge = $vehicleCharge;
        return $this;
    }
}

