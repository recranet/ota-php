<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleAvailRSCoreType
 *
 * The VehicleAvailRSType complex type identifies the data that is considered common when describing the availability and rates of rental vehicles.
 * XSD Type: VehicleAvailRSCoreType
 */
class VehicleAvailRSCoreType
{
    /**
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     *
     * @var \Recranet\OTA\Type\VehicleRentalCoreType $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * A collection of vendors for which vehicle availability is available.
     *
     * @var \Recranet\OTA\Type\VehicleVendorAvailabilityType[] $vehVendorAvails
     */
    private $vehVendorAvails = null;

    /**
     * Gets as vehRentalCore
     *
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     *
     * @return \Recranet\OTA\Type\VehicleRentalCoreType
     */
    public function getVehRentalCore()
    {
        return $this->vehRentalCore;
    }

    /**
     * Sets a new vehRentalCore
     *
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     *
     * @param \Recranet\OTA\Type\VehicleRentalCoreType $vehRentalCore
     * @return self
     */
    public function setVehRentalCore(\Recranet\OTA\Type\VehicleRentalCoreType $vehRentalCore)
    {
        $this->vehRentalCore = $vehRentalCore;
        return $this;
    }

    /**
     * Adds as vehVendorAvail
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleVendorAvailabilityType $vehVendorAvail
     */
    public function addToVehVendorAvails(\Recranet\OTA\Type\VehicleVendorAvailabilityType $vehVendorAvail)
    {
        $this->vehVendorAvails[] = $vehVendorAvail;
        return $this;
    }

    /**
     * isset vehVendorAvails
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehVendorAvails($index)
    {
        return isset($this->vehVendorAvails[$index]);
    }

    /**
     * unset vehVendorAvails
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehVendorAvails($index)
    {
        unset($this->vehVendorAvails[$index]);
    }

    /**
     * Gets as vehVendorAvails
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @return \Recranet\OTA\Type\VehicleVendorAvailabilityType[]
     */
    public function getVehVendorAvails()
    {
        return $this->vehVendorAvails;
    }

    /**
     * Sets a new vehVendorAvails
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @param \Recranet\OTA\Type\VehicleVendorAvailabilityType[] $vehVendorAvails
     * @return self
     */
    public function setVehVendorAvails(array $vehVendorAvails)
    {
        $this->vehVendorAvails = $vehVendorAvails;
        return $this;
    }
}

