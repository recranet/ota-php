<?php

namespace Recranet\OTA\Type\VehicleRentalTransactionType;

use Recranet\OTA\Type\VehicleType;

/**
 * Class representing VehicleAType
 */
class VehicleAType extends VehicleType
{
    /**
     * @var \Recranet\OTA\Type\VehicleRentalDetailsType[] $vehRentalDetails
     */
    private $vehRentalDetails = [
        
    ];

    /**
     * Adds as vehRentalDetails
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleRentalDetailsType $vehRentalDetails
     */
    public function addToVehRentalDetails(\Recranet\OTA\Type\VehicleRentalDetailsType $vehRentalDetails)
    {
        $this->vehRentalDetails[] = $vehRentalDetails;
        return $this;
    }

    /**
     * isset vehRentalDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehRentalDetails($index)
    {
        return isset($this->vehRentalDetails[$index]);
    }

    /**
     * unset vehRentalDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehRentalDetails($index)
    {
        unset($this->vehRentalDetails[$index]);
    }

    /**
     * Gets as vehRentalDetails
     *
     * @return \Recranet\OTA\Type\VehicleRentalDetailsType[]
     */
    public function getVehRentalDetails()
    {
        return $this->vehRentalDetails;
    }

    /**
     * Sets a new vehRentalDetails
     *
     * @param \Recranet\OTA\Type\VehicleRentalDetailsType[] $vehRentalDetails
     * @return self
     */
    public function setVehRentalDetails(array $vehRentalDetails = null)
    {
        $this->vehRentalDetails = $vehRentalDetails;
        return $this;
    }
}

