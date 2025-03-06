<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\CompanyNameType $vendor
     */
    private $vendor = null;

    /**
     * A collection of vehicles along with their availability and associated rate information.
     *
     * @var \Recranet\OTA\Type\VehicleVendorAvailabilityType\VehAvailsAType $vehAvails
     */
    private $vehAvails = null;

    /**
     * Supplemental information associated with the vendor and the availability of the vehicles.
     *
     * @var \Recranet\OTA\Type\VehicleAvailVendorInfoType $info
     */
    private $info = null;

    /**
     * Gets as vendor
     *
     * Information on the vendor associated with this availability of vehicles.
     *
     * @return \Recranet\OTA\Type\CompanyNameType
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
     * @param \Recranet\OTA\Type\CompanyNameType $vendor
     * @return self
     */
    public function setVendor(?\Recranet\OTA\Type\CompanyNameType $vendor = null)
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * Gets as vehAvails
     *
     * A collection of vehicles along with their availability and associated rate information.
     *
     * @return \Recranet\OTA\Type\VehicleVendorAvailabilityType\VehAvailsAType
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
     * @param \Recranet\OTA\Type\VehicleVendorAvailabilityType\VehAvailsAType $vehAvails
     * @return self
     */
    public function setVehAvails(\Recranet\OTA\Type\VehicleVendorAvailabilityType\VehAvailsAType $vehAvails)
    {
        $this->vehAvails = $vehAvails;
        return $this;
    }

    /**
     * Gets as info
     *
     * Supplemental information associated with the vendor and the availability of the vehicles.
     *
     * @return \Recranet\OTA\Type\VehicleAvailVendorInfoType
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
     * @param \Recranet\OTA\Type\VehicleAvailVendorInfoType $info
     * @return self
     */
    public function setInfo(?\Recranet\OTA\Type\VehicleAvailVendorInfoType $info = null)
    {
        $this->info = $info;
        return $this;
    }
}

