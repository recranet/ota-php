<?php

namespace Recranet\OTA;

/**
 * Class representing VehicleVendorAvailabilityType
 *
 * The VehicleVendorAvailabilityType complex type identifies the data that describes the availability of one or more vehicles for a specific vendor, along with supplemental information about the vendor and the facilities of that vendor.
 * XSD Type: VehicleVendorAvailabilityType
 */
class VehicleVendorAvailabilityType
{
    /**
     * Information on the vendor associated with this availability of vehicles.
     *
     * @var \Recranet\OTA\CompanyNameType $vendor
     */
    private $vendor = null;

    /**
     * A collection of vehicles along with their availability and associated rate information.
     *
     * @var \Recranet\OTA\VehicleVendorAvailabilityType\VehAvailsAType $vehAvails
     */
    private $vehAvails = null;

    /**
     * Supplemental information associated with the vendor and the availability of the vehicles.
     *
     * @var \Recranet\OTA\VehicleAvailVendorInfoType $info
     */
    private $info = null;

    /**
     * Gets as vendor
     *
     * Information on the vendor associated with this availability of vehicles.
     *
     * @return \Recranet\OTA\CompanyNameType
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * Information on the vendor associated with this availability of vehicles.
     *
     * @param \Recranet\OTA\CompanyNameType $vendor
     * @return self
     */
    public function setVendor(?\Recranet\OTA\CompanyNameType $vendor = null)
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * Gets as vehAvails
     *
     * A collection of vehicles along with their availability and associated rate information.
     *
     * @return \Recranet\OTA\VehicleVendorAvailabilityType\VehAvailsAType
     */
    public function getVehAvails()
    {
        return $this->vehAvails;
    }

    /**
     * Sets a new vehAvails
     *
     * A collection of vehicles along with their availability and associated rate information.
     *
     * @param \Recranet\OTA\VehicleVendorAvailabilityType\VehAvailsAType $vehAvails
     * @return self
     */
    public function setVehAvails(\Recranet\OTA\VehicleVendorAvailabilityType\VehAvailsAType $vehAvails)
    {
        $this->vehAvails = $vehAvails;
        return $this;
    }

    /**
     * Gets as info
     *
     * Supplemental information associated with the vendor and the availability of the vehicles.
     *
     * @return \Recranet\OTA\VehicleAvailVendorInfoType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * Supplemental information associated with the vendor and the availability of the vehicles.
     *
     * @param \Recranet\OTA\VehicleAvailVendorInfoType $info
     * @return self
     */
    public function setInfo(?\Recranet\OTA\VehicleAvailVendorInfoType $info = null)
    {
        $this->info = $info;
        return $this;
    }
}

