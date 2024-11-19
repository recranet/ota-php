<?php

namespace Recranet\OTA\VehicleAvailRSCoreType;

/**
 * Class representing VehVendorAvailsAType
 */
class VehVendorAvailsAType
{
    /**
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @var \Recranet\OTA\VehicleVendorAvailabilityType[] $vehVendorAvail
     */
    private $vehVendorAvail = [
        
    ];

    /**
     * Adds as vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @return self
     * @param \Recranet\OTA\VehicleVendorAvailabilityType $vehVendorAvail
     */
    public function addToVehVendorAvail(\Recranet\OTA\VehicleVendorAvailabilityType $vehVendorAvail)
    {
        $this->vehVendorAvail[] = $vehVendorAvail;
        return $this;
    }

    /**
     * isset vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehVendorAvail($index)
    {
        return isset($this->vehVendorAvail[$index]);
    }

    /**
     * unset vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehVendorAvail($index)
    {
        unset($this->vehVendorAvail[$index]);
    }

    /**
     * Gets as vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @return \Recranet\OTA\VehicleVendorAvailabilityType[]
     */
    public function getVehVendorAvail()
    {
        return $this->vehVendorAvail;
    }

    /**
     * Sets a new vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @param \Recranet\OTA\VehicleVendorAvailabilityType[] $vehVendorAvail
     * @return self
     */
    public function setVehVendorAvail(array $vehVendorAvail)
    {
        $this->vehVendorAvail = $vehVendorAvail;
        return $this;
    }
}

