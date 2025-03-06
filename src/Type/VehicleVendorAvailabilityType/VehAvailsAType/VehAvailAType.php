<?php

namespace Recranet\OTA\Type\VehicleVendorAvailabilityType\VehAvailsAType;

/**
 * Class representing VehAvailAType
 */
class VehAvailAType
{
    /**
     * @var \Recranet\OTA\Type\VehicleAvailCoreType $vehAvailCore
     */
    private $vehAvailCore = null;

    /**
     * @var \Recranet\OTA\Type\VehicleAvailAdditionalInfoType $vehAvailInfo
     */
    private $vehAvailInfo = null;

    /**
     * Specifies the advance booking requirements.
     *
     * @var \Recranet\OTA\Type\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType\AdvanceBookingAType $advanceBooking
     */
    private $advanceBooking = null;

    /**
     * Gets as vehAvailCore
     *
     * @return \Recranet\OTA\Type\VehicleAvailCoreType
     */
    public function getVehAvailCore()
    {
        return $this->vehAvailCore;
    }

    /**
     * Sets a new vehAvailCore
     *
     * @param \Recranet\OTA\Type\VehicleAvailCoreType $vehAvailCore
     * @return self
     */
    public function setVehAvailCore(\Recranet\OTA\Type\VehicleAvailCoreType $vehAvailCore)
    {
        $this->vehAvailCore = $vehAvailCore;
        return $this;
    }

    /**
     * Gets as vehAvailInfo
     *
     * @return \Recranet\OTA\Type\VehicleAvailAdditionalInfoType
     */
    public function getVehAvailInfo()
    {
        return $this->vehAvailInfo;
    }

    /**
     * Sets a new vehAvailInfo
     *
     * @param \Recranet\OTA\Type\VehicleAvailAdditionalInfoType $vehAvailInfo
     * @return self
     */
    public function setVehAvailInfo(?\Recranet\OTA\Type\VehicleAvailAdditionalInfoType $vehAvailInfo = null)
    {
        $this->vehAvailInfo = $vehAvailInfo;
        return $this;
    }

    /**
     * Gets as advanceBooking
     *
     * Specifies the advance booking requirements.
     *
     * @return \Recranet\OTA\Type\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType\AdvanceBookingAType
     */
    public function getAdvanceBooking()
    {
        return $this->advanceBooking;
    }

    /**
     * Sets a new advanceBooking
     *
     * Specifies the advance booking requirements.
     *
     * @param \Recranet\OTA\Type\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType\AdvanceBookingAType $advanceBooking
     * @return self
     */
    public function setAdvanceBooking(?\Recranet\OTA\Type\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType\AdvanceBookingAType $advanceBooking = null)
    {
        $this->advanceBooking = $advanceBooking;
        return $this;
    }
}

